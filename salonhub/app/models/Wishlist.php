<?php
require_once __DIR__ . '/Model.php';

class Wishlist extends Model {
    public function add($customer_id, $product_id) {
        $stmt = $this->db->prepare("INSERT IGNORE INTO wishlists (customer_id, product_id) VALUES (:cid, :pid)");
        return $stmt->execute(['cid' => $customer_id, 'pid' => $product_id]);
    }
    public function getCustomerWishlist($customer_id) {
        $stmt = $this->db->prepare("SELECT p.* FROM products p JOIN wishlists w ON p.id = w.product_id WHERE w.customer_id = :cid");
        $stmt->execute(['cid' => $customer_id]);
        return $stmt->fetchAll();
    }
}
