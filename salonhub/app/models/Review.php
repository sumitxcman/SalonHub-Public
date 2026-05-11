<?php
require_once __DIR__ . '/Model.php';

class Review extends Model {
    public function addReview($product_id, $customer_id, $rating, $text) {
        $stmt = $this->db->prepare("INSERT INTO product_reviews (product_id, customer_id, rating, review_text) VALUES (:pid, :cid, :rat, :txt)");
        return $stmt->execute(['pid' => $product_id, 'cid' => $customer_id, 'rat' => $rating, 'txt' => $text]);
    }
}
