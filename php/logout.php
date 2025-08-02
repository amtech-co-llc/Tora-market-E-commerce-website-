<?php
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Delete the session cookie (if any)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Delete custom user cookie if it exists
if (isset($_COOKIE['user_unique_id_session'])) {
    setcookie('user_unique_id_session', '', time() - 3600, '/');
}

// Redirect to login page
header("Location: ../index.php");
exit();
