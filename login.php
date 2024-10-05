<?php
session_start();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded credentials for example purposes
    $valid_username = 'user123';
    $valid_password = 'password123';

    // Check if the input matches
    if ($username === $valid_username && $password === $valid_password) {
        // Successful login, set session
        $_SESSION['username'] = $username;
        header("Location: confirmation.html"); // Redirect to confirmation or dashboard
        exit;
    } else {
        // Failed login, redirect with error
        $error = "Invalid username or password";
        header("Location: login.html?error=" . urlencode($error));
        exit;
    }
}
?>

