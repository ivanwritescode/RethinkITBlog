<?php
session_start(); // Start the session

include '../../utils/db_connect.php';

$username = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = ? AND password = ?";
$stmt = $conn->prepare($sql);

// Bind the parameters and execute the statement
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

// Fetch the result
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Authentication successful, store the user ID in a session variable
    $row = $result->fetch_assoc();
    print_r($row);
    $_SESSION['id'] = $row['id'];
    echo $_SESSION['id'];

    // Redirect the user to the home page or any other desired page
    header("Location: ../../home.php");
    exit;
} else {
    // Authentication failed, display error message
    echo "Invalid email or password.";
    header("Location: loginform.php?error=true");
}

$stmt->close();
$conn->close();
?>
