<?php
session_start();

if (isset($_SESSION['id'])) {
    // User is already logged in, redirect to home page
    header("Location: home.php");
    exit;
} else {
    // Otherwise, redirect to login page
    header("Location: accounts/login/loginform.php");
    exit;
}
?>

<?php include 'utils/db_connect.php'; ?>
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniBlog</title>
    <link rel="stylesheet" href="public/styles/reset.css">
    <link rel="stylesheet" href="public/styles/styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
</body>
</html>