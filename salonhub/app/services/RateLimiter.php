<?php
class RateLimiter {
    public static function check($identifier, $max_attempts = 5, $decay_minutes = 15) {
        if (session_status() === PHP_SESSION_NONE) session_start();
        $key = 'rate_limit_' . $identifier;
        if (!isset($_SESSION[$key])) {
            $_SESSION[$key] = ['attempts' => 1, 'time' => time()];
            return true;
        }

        if (time() - $_SESSION[$key]['time'] > ($decay_minutes * 60)) {
            $_SESSION[$key] = ['attempts' => 1, 'time' => time()];
            return true;
        }

        if ($_SESSION[$key]['attempts'] >= $max_attempts) {
            return false;
        }

        $_SESSION[$key]['attempts']++;
        return true;
    }
}
