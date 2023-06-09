<?php

if (!isset($_SESSION)) {
    session_start(); // Start the session
}

// Specify the base path here
$basePath = "http://localhost/RethinkITBlog/";

// Check if the user ID session variable is set
if (isset($_SESSION['id'])) {
    // Session variable is set, the user is logged in
    $userId = $_SESSION['id'];

    // Fetch the username from the database using the user ID
    include 'utils/db_connect.php';
    $sql = "SELECT username FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $username = $row['username'];

        // Display the header with the username
        echo '<header>';
        echo '    <div class="logo">';
        echo '        <h1><a href="'. $basePath .'home.php">MiniBlog</a></h1>';
        echo '    </div>';
        echo '<nav>';
        echo '    <div class="user-greeting">';
        echo '        Hi ' . $username;
        echo '    </div>';
        echo '    <div class="nav-links">';
        echo '        <a href="' . $basePath . 'home.php">Home</a>';
        echo '        <a href="' . $basePath . 'accounts/logout.php">Logout</a>';
        echo '    </div>';

        echo '</nav>';
        echo '</header>';
    } else {
        // Failed to fetch the username
        echo '<header>';
        echo '    <div class="logo">';
        echo '        <h1><a href="'. $basePath .'home.php">MiniBlog</a></h1>';
        echo '    </div>';
        echo '<nav>';
        echo '    <div class="user-greeting">';
        echo '        Hi User';
        echo '    </div>';
        echo '    <div class="nav-links">';
        echo '        <a href="' . $basePath . 'home.php">Home</a>';
        echo '        <a href="' . $basePath . 'accounts/logout.php">Logout</a>';
        echo '    </div>';
        echo '<nav>';
        echo '</header>';
    }

    $stmt->close();
    $conn->close();
} else {
    // Session variable is not set, the user is not logged in
    echo '<header>';
    echo '    <div class="logo">';
    echo '        <h1><a href="#">MiniBlog</a></h1>';
    echo '    </div>';
    echo '<nav>';
    echo '    <div class="nav-links">';
    echo '        <a href="' . $basePath . 'accounts/login/loginform.php">Login</a>';
    echo '    </div>';
    echo '<nav>';
    echo '</header>';
}
?>