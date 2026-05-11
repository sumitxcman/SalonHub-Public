<?php
// Simulation of DB Failure Test
require_once __DIR__ . '/config/database.php';

// Mocking a failing configuration (e.g., wrong DB name)
class FailingDatabase extends Database {
    public function getConnection() {
        try {
            // This will fail because the DB doesn't exist
            $dsn = "mysql:host=127.0.0.1;dbname=non_existent_db;charset=utf8mb4";
            new PDO($dsn, "root", "");
        } catch(PDOException $exception) {
            // This replicates the logic now in database.php
            throw new Exception("Database connection failed. Please try again later.");
        }
    }
}

echo "Testing Database Failure Handling...\n";
try {
    $db = new FailingDatabase();
    $db->getConnection();
} catch (Exception $e) {
    echo "SUCCESS: CAUGHT EXCEPTION -> " . $e->getMessage() . "\n";
}
