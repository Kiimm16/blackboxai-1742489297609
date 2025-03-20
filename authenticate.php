<?php
require_once 'config.php';

// Verify request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: login.php");
    exit();
}

// Verify CSRF token
if (!isset($_POST['csrf_token'])) {
    header("Location: login.php?error=csrf");
    exit();
}

// Get the token from the form
$submitted_token = $_POST['csrf_token'];

// Get the token from the session
$session_token = isset($_SESSION['csrf_token']) ? $_SESSION['csrf_token'] : '';

// Verify token match
if (empty($submitted_token) || empty($session_token) || $submitted_token !== $session_token) {
    header("Location: login.php?error=csrf");
    exit();
}

// Validate input
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

if (!$username || !$password) {
    header("Location: login.php?error=1");
    exit();
}

// Verify credentials
if ($username === ADMIN_USERNAME && $password === ADMIN_PASSWORD) {
    // Set session variables
    $_SESSION['user_id'] = 1;
    $_SESSION['username'] = $username;
    $_SESSION['last_activity'] = time();
    $_SESSION['created'] = time();

    // Regenerate session ID to prevent session fixation
    session_regenerate_id(true);

    // Set session cookie parameters
    $params = session_get_cookie_params();
    setcookie(session_name(), session_id(), time() + 1800, 
             $params['path'], $params['domain'], 
             true, // Secure
             true  // HttpOnly
    );

    // Generate new CSRF token for next request
    generateCSRFToken();

    // Redirect to dashboard
    header("Location: dashboard.php");
    exit();
} else {
    // Invalid credentials
    header("Location: login.php?error=1");
    exit();
}
?>