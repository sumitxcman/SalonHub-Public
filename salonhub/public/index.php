<?php
/**
 * SalonHub Front Controller
 * This is the single entry point for all requests.
 */

// Start consistent session management
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Ensure error logging but suppress display for security
ini_set('display_errors', 0);
error_reporting(E_ALL);

// Base Path Definition for Controllers/Models
require_once __DIR__ . '/../config/database.php';

// Include the Centralized Routing Logic
require_once __DIR__ . '/../routes/web.php';
