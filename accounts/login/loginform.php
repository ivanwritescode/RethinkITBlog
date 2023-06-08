<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniBlog - Login</title>
	<link rel="stylesheet" href="../../public/styles/reset.css">
	<link rel="stylesheet" href="../../public/styles/styles.css">
    <script>
        function preventFormSubmit() {
            event.preventDefault(); // Prevent the form from being submitted
            window.location.href = "../registration/registrationform.php"; // And redirect to register form page
        }
    </script>
</head>
<body>
    <?php include '../../header.php'; ?>
    <div class="container">
        <main>
            <div class="card">
                <div class="card-header">
                    <h2>Login</h1>    
                </div>
                <div class="card-container">
                    <?php
                    if (isset($_GET['error'])) {
                        echo '<p class="error-message">Invalid username or password</p>';
                    }
                    ?>
                    <form action="login.php" method="POST">
                        <p class="form-group"><input name="email" type="email" placeholder="Enter Email" required></p>
                        <p class="form-group"><input name="password" type="password" placeholder="Password" required></p>
                        <button class="btn btn-submit" type="submit">LOGIN</button>
                        <button class="btn btn-submit" type="submit" onClick="preventFormSubmit()">REGISTER</button>
                    </form>
                </div>
                <div class="card-footer">
                    <span>Currently logged out</span>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
