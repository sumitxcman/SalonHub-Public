<?php

class AuthService {
    public static function startSession() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function loginUser($user) {
        self::startSession();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_role'] = $user['role'];
        $_SESSION['user_name'] = $user['name'];
    }

    public static function logout() {
        self::startSession();
        session_unset();
        session_destroy();
    }

    public static function isAuthenticated() {
        self::startSession();
        return isset($_SESSION['user_id']);
    }

    public static function hasRole($required_role) {
        self::startSession();
        return isset($_SESSION['user_role']) && $_SESSION['user_role'] === $required_role;
    }
}
