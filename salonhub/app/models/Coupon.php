<?php
require_once __DIR__ . '/Model.php';

class Coupon extends Model {
    public function validateCode($code) {
        $stmt = $this->db->prepare("SELECT * FROM coupons WHERE code = :code AND (valid_until IS NULL OR valid_until >= CURDATE()) LIMIT 1");
        $stmt->execute(['code' => $code]);
        return $stmt->fetch();
    }
}
