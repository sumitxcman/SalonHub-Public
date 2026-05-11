<?php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../services/AuthService.php';
require_once __DIR__ . '/../services/RateLimiter.php';

class AuthController extends Controller {
    public function showLogin() { $this->view('login'); }
    public function showRegister() { $this->view('register'); }

    public function processLogin() {
        if (!RateLimiter::check($_SERVER['REMOTE_ADDR'])) {
            $this->jsonResponse(['success' => false, 'message' => 'Too many login attempts.'], 429);
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            $otp = $_POST['otp'] ?? null;

            $userModel = new User();
            $user = $userModel->findByEmail($email);

            if ($user && password_verify($password, $user['password_hash'])) {
                if ($user['otp_code'] && $user['otp_code'] !== $otp) {
                    $this->jsonResponse(['success' => false, 'message' => 'OTP Required or Invalid.'], 401);
                }
                AuthService::loginUser($user);
                $this->jsonResponse(['success' => true, 'message' => 'Logged in securely.']);
            } else {
                $this->jsonResponse(['success' => false, 'message' => 'Invalid credentials.'], 401);
            }
        }
    }

    public function processRegister() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            $userModel = new User();
            if ($userModel->findByEmail($email)) {
                $this->jsonResponse(['success' => false, 'message' => 'Email already exists.'], 400);
            } else {
                $userModel->create($name, $email, $password);
                $this->jsonResponse(['success' => true, 'message' => 'Registration successful.']);
            }
        }
    }

    public function logout() {
        AuthService::logout();
        $this->jsonResponse(['success' => true, 'message' => 'Logged out.']);
    }
}
