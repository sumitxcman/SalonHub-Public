<?php
require_once __DIR__ . '/Model.php';

class Salon extends Model {
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM salons");
        return $stmt->fetchAll();
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM salons WHERE id = :id LIMIT 1");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function getByCity($city) {
        $stmt = $this->db->prepare("SELECT * FROM salons WHERE city LIKE :city OR address LIKE :city");
        $stmt->execute(['city' => '%' . $city . '%']);
        return $stmt->fetchAll();
    }
}
