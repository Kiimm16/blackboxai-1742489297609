<?php
// Error reporting (enable during development)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session with secure settings
ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_secure', 1);
session_start();

// Time zone setting
date_default_timezone_set('UTC');

// Admin credentials (in production, these should be in a secure database)
define('ADMIN_USERNAME', 'admin');
// Password hash for 'admin123' - in production, use a stronger password
define('ADMIN_PASSWORD_HASH', password_hash('admin123', PASSWORD_DEFAULT));

// Function to check if user is logged in
function isLoggedIn() {
    return isset($_SESSION['user']) && $_SESSION['user'] === 'admin';
}
?>