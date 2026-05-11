<?php
require_once __DIR__ . '/Model.php';

class Product extends Model {
    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM products WHERE stock > 0");
        return $stmt->fetchAll();
    }
    
    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM products WHERE id = :id LIMIT 1");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
}
