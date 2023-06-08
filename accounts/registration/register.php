<?php
session_start();

include '../../utils/db_connect.php';

// Retrieve form data
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

// TODO: Perform validation

// Insert form data into the "users" table
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";

    // Get the user ID of the newly registered user
    $userId = $conn->insert_id;

    // Log in the user by storing the user ID in a session variable
    $_SESSION['id'] = $userId;

    // Redirect the user to the home page or any other desired page
    header("Location: ../../home.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

