<?php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../services/AuthService.php';

class AnalyticsController extends Controller {
    public function getDashboard() {
        if (!AuthService::isAuthenticated()) {
            $this->jsonResponse(['success' => false, 'message' => 'Unauthorized'], 401);
        }
        
        require_once __DIR__ . '/../models/Analytics.php';
        $analyticsModel = new Analytics();
        
        $role = $_SESSION['user_role'] ?? '';
        $user_id = $_SESSION['user_id'] ?? '';
        
        if ($role === 'admin') {
            $data = $analyticsModel->getAdminStats();
            $this->jsonResponse(['success' => true, 'role' => 'admin', 'data' => $data]);
        } elseif ($role === 'owner') {
            $data = $analyticsModel->getOwnerStats($user_id);
            $this->jsonResponse(['success' => true, 'role' => 'owner', 'data' => $data]);
        } else {
            $this->jsonResponse(['success' => false, 'message' => 'Forbidden'], 403);
        }
    }
}
