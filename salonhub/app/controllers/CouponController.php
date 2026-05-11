<?php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../models/Coupon.php';

class CouponController extends Controller {
    public function validate() {
        $code = $_GET['code'] ?? '';
        if (empty($code)) {
            $this->jsonResponse(['success' => false, 'message' => 'No code provided.'], 400);
        }

        $couponModel = new Coupon();
        $coupon = $couponModel->validateCode($code);

        if ($coupon) {
            $this->jsonResponse(['success' => true, 'data' => $coupon]);
        } else {
            $this->jsonResponse(['success' => false, 'message' => 'Invalid or expired coupon.'], 404);
        }
    }
}
