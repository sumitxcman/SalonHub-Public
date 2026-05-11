<?php
require_once __DIR__ . '/Model.php';

class Loyalty extends Model {
    public function getPoints($user_id) {
        $stmt = $this->db->prepare("SELECT reward_points, membership_tier FROM users WHERE id = :id");
        $stmt->execute(['id' => $user_id]);
        return $stmt->fetch();
    }
    
    public function addPoints($user_id, $amount) {
        $stmt = $this->db->prepare("UPDATE users SET reward_points = reward_points + :amt WHERE id = :id");
        return $stmt->execute(['amt' => $amount, 'id' => $user_id]);
    }
}
