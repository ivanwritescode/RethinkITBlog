<?php include '../../utils/db_connect.php'; ?>
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
</head>
<body>
	<!-- <?php include '../../header.php'; ?> -->
	<main>
        <div>
            <h1>Registration</h1>	
            <div class="card">
                <h2>See the Registration Rules</h2>
                <form action="register.php" method="POST">
                    <input name="username" type="text">
                    <input name="email" type="email">
                    <input name="password" type="password">
                    <input name="confirmpassword" type="password">
                    <button>REGISTER</button>
                </form>
                Return to the<a href="../login/loginform.php">LOGIN PAGE</a>
            </div>
        </div>
	</main>
</body>
</html>


