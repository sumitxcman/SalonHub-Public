<?php

class Database {
    private $host;
    private $port;
    private $db_name;
    private $username;
    private $password;
    public $conn;

    public function __construct() {
        $envFile = __DIR__ . '/../.env';
        if (file_exists($envFile)) {
            $envData = parse_ini_file($envFile);
            $this->host = $envData['DB_HOST'] ?? '127.0.0.1';
            $this->port = $envData['DB_PORT'] ?? '5432';
            $this->db_name = $envData['DB_DATABASE'] ?? 'salonhub';
            $this->username = $envData['DB_USERNAME'] ?? 'postgres';
            $this->password = $envData['DB_PASSWORD'] ?? '';
        } else {
            $this->host = getenv('DB_HOST') ?: '127.0.0.1';
            $this->port = getenv('DB_PORT') ?: '5432';
            $this->db_name = getenv('DB_DATABASE') ?: 'salonhub';
            $this->username = getenv('DB_USERNAME') ?: 'postgres';
            $this->password = getenv('DB_PASSWORD') ?: '';
        }
    }

    public function getConnection() {
        $this->conn = null;

        try {
            // Using pgsql for Neon PostgreSQL
            $dsn = "pgsql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db_name;
            $this->conn = new PDO($dsn, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch(PDOException $exception) {
            // Log internally for debugging but do not expose to the client
            error_log("DB Connection Error: " . $exception->getMessage());
            throw new Exception("Database connection failed. Please try again later.");
        }

        return $this->conn;
    }
}
