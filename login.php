<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Hardcoded credentials
$valid_username = "mohit";
$valid_password = "1234";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        // Redirect to success.html
        header("Location: success.html");
        exit();
    } else {
        echo "<h2 style='color:red;'>Invalid username or password.</h2>";
        echo "<a href='index.html'>Go back</a>";
    }
}
?>
