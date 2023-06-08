<?php
include '../../utils/db_connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Perform validation and authentication
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Authentication successful, redirect to a logged-in page
    header("Location: ../../home.php");
    exit;
} else {
    // Authentication failed, display error message
    echo "Invalid username or password.";
}

$conn->close();
?>
