<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$db_selected = mysqli_select_db($conn, "rethinkittestminiblogsite");

if (!$db_selected) {
    die("Database selection failed: " . mysqli_error($conn));
}
?>
