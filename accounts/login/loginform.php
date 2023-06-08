<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniBlog - Login</title>
    <script>
        function preventFormSubmit() {
            event.preventDefault(); // Prevent the form from being submitted
            window.location.href = "../registration/registrationform.php"; // And redirect to register form page
        }
    </script>
</head>
<body>
    <!-- <?php include 'header.php'; ?> -->
    <main>
        <h1>Login</h1>    
        <div class="card">
            <form action="login.php" method="POST">
                <input name="username" type="text" placeholder="Username" required>
                <input name="password" type="password" placeholder="Password" required>
                <button type="submit">LOGIN</button>
                <button type="submit" onClick="preventFormSubmit()">REGISTER</button>
            </form>
            <span>Currently logged out</span>
        </div>
    </main>
</body>
</html>
