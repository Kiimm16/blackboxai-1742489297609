<?php
// Session configuration
ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_secure', 1);
ini_set('session.gc_maxlifetime', 1800); // 30 minutes
ini_set('session.cookie_lifetime', 1800); // 30 minutes

// Start session
session_start();

// Session timeout check
function checkSessionTimeout() {
    $timeout = 1800; // 30 minutes in seconds
    if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $timeout)) {
        session_unset();
        session_destroy();
        header("Location: login.php?timeout=1");
        exit();
    }
    $_SESSION['last_activity'] = time();
}

// Check if user is logged in
function isLoggedIn() {
    if (isset($_SESSION['user_id']) && isset($_SESSION['last_activity'])) {
        checkSessionTimeout();
        return true;
    }
    return false;
}

// Require authentication for protected pages
function requireLogin() {
    if (!isLoggedIn()) {
        header("Location: login.php?auth=1");
        exit();
    }
    checkSessionTimeout();
}

// Database configuration (if needed)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'portfolio');

// Admin credentials (in a real application, these would be in a database with hashed passwords)
define('ADMIN_USERNAME', 'admin');
define('ADMIN_PASSWORD', 'admin123');

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// CSRF Protection
function generateCSRFToken() {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function verifyCSRFToken($token) {
    if (!isset($_SESSION['csrf_token']) || $token !== $_SESSION['csrf_token']) {
        header("Location: login.php?error=csrf");
        exit();
    }
}

// Session regeneration
function regenerateSession() {
    if (!isset($_SESSION['created'])) {
        $_SESSION['created'] = time();
    } else if (time() - $_SESSION['created'] > 1800) {
        // Regenerate session ID every 30 minutes
        session_regenerate_id(true);
        $_SESSION['created'] = time();
    }
}

// Clean session data
function cleanSessionData() {
    $_SESSION = array();
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time()-3600, '/');
    }
    session_destroy();
}

// Initialize session security
regenerateSession();
?>