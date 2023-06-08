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
	<link rel="stylesheet" href="../../public/styles/reset.css">
	<link rel="stylesheet" href="../../public/styles/styles.css">
</head>
<body>
	<?php include '../../header.php'; ?>
    <div class="container">
        <main>
            <h1 class="section-title text-center">Registration</h1>	
            <div class="card">
                <div class="card-header">
                    <h2>See the Registration Rules</h2>
                </div>
                <form action="register.php" method="POST">
                    <p class="form-group">
                        <input name="username" type="text" placeholder="Enter Email">
                    </p>
                    <p class="form-group">
                        <input name="email" type="email" placeholder="Enter Email">
                    </p>
                    <p class="form-group">
                        <input name="password" type="password" placeholder="Enter Password">
                    </p>
                    <p class="form-group">
                        <input name="confirmpassword" type="password" placeholder="Confirm Password">
                    </p> 
                    <button class="btn btn-submit">REGISTER</button>
                </form>
                <div class="card-footer">
                    Return to the<a href="../login/loginform.php">LOGIN PAGE</a>
                </div>
            </div>
        </main>
    </div>
</body>
</html>


