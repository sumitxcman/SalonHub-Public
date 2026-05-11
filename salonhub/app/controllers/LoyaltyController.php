<?php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../models/Loyalty.php';
require_once __DIR__ . '/../services/AuthService.php';

class LoyaltyController extends Controller {
    public function checkStatus() {
        if (!AuthService::isAuthenticated()) $this->jsonResponse(['success' => false], 401);
        
        $loyaltyModel = new Loyalty();
        $data = $loyaltyModel->getPoints($_SESSION['user_id']);
        
        $this->jsonResponse(['success' => true, 'data' => $data]);
    }
}
