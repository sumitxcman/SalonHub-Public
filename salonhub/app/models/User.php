<?php
require_once __DIR__ . '/Model.php';

class User extends Model {
    public function findByEmail($email) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch();
    }

    public function create($name, $email, $password, $role = 'customer') {
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->db->prepare("INSERT INTO users (name, email, password_hash, role) VALUES (:name, :email, :hash, :role)");
        return $stmt->execute([
            'name' => $name,
            'email' => $email,
            'hash' => $hash,
            'role' => $role
        ]);
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT id, name, email, role, reward_points, created_at FROM users");
        return $stmt->fetchAll();
    }
}
