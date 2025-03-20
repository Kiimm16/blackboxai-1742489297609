<?php
require_once 'config.php';

// Verify if user is logged in
if (isLoggedIn()) {
    // Clear all session data
    cleanSessionData();
    
    // Clear authentication cookie if exists
    if (isset($_COOKIE['remember_me'])) {
        setcookie('remember_me', '', time() - 3600, '/');
    }
}

// Redirect to login page
header("Location: login.php?logout=1");
exit();
?>