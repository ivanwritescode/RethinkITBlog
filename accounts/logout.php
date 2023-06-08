<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location: login/loginform.php");
exit;
?>
