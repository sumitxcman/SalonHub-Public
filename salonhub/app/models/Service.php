<?php
require_once __DIR__ . '/Model.php';

class Service extends Model {
    public function getBySalonId($salon_id) {
        $stmt = $this->db->prepare("SELECT * FROM services WHERE salon_id = :salon_id");
        $stmt->execute(['salon_id' => $salon_id]);
        return $stmt->fetchAll();
    }
}
