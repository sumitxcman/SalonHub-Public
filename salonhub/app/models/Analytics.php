<?php
require_once __DIR__ . '/Model.php';

class Analytics extends Model {
    public function getAdminStats() {
        $stats = [];
        $stmt = $this->db->query("SELECT COUNT(*) as total_users FROM users");
        $stats['users'] = $stmt->fetchColumn();
        
        $stmt = $this->db->query("SELECT COUNT(*) as total_salons FROM salons");
        $stats['salons'] = $stmt->fetchColumn();
        
        $stmt = $this->db->query("SELECT SUM(total_amount) as platform_revenue FROM orders WHERE payment_status = 'completed'");
        $stats['revenue'] = $stmt->fetchColumn() ?: 0;
        
        return $stats;
    }
    
    public function getOwnerStats($owner_id) {
        $stats = [];
        
        $stmt = $this->db->prepare("SELECT COUNT(*) as total_bookings FROM bookings b JOIN salons s ON b.salon_id = s.id WHERE s.owner_id = :oid");
        $stmt->execute(['oid' => $owner_id]);
        $stats['bookings'] = $stmt->fetchColumn();
        
        $stmt = $this->db->prepare("SELECT SUM(oi.price * oi.quantity) as product_revenue FROM order_items oi JOIN products p ON oi.product_id = p.id JOIN salons s ON p.salon_id = s.id WHERE s.owner_id = :oid");
        $stmt->execute(['oid' => $owner_id]);
        $stats['product_revenue'] = $stmt->fetchColumn() ?: 0;
        
        return $stats;
    }
}
