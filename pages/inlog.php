<?php
session_start();

// Check if the user is already authenticated
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
    header("Location: admin.php"); // Redirect to admin page if already logged in
   
}

// Your admin login credentials (change these to your own)
$adminUsername = "JoshuaAdmin";
$adminPassword = "Killyourself";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $adminUsername && $password === $adminPassword) {
        // Authentication successful
        $_SESSION["authenticated"] = true;
        header("Location: admin.php"); // Redirect to admin page
       
    } else {
        // Authentication failed
        $errorMessage = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
    
<header>
            <nav>
                <li><a href="../Root/index.php">Home</a></li>
                <li><a href="../pages/Project.php">Projecten</a></li>
                <li><a href="../pages/About.php">Over mij</a></li>
                <li><a href="../pages/Contact.php">Contact</a></li>
                <?php
                    if($_SESSION['authenticated'] == true) {
                        echo '<li><a href="../pages/admin.php">Admin</a></li>';
                    } else {
                        echo '<li><a class="active" href="../pages/inlog.php">Login</a></li>';
                    }
                ?>

            </nav>
                  
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        </header> 

    <h2>Login</h2>
    <?php if (isset($errorMessage)) : ?>
        <p><?php echo $errorMessage; ?></p>
    <?php endif; ?>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>


    <script src="../js/header.js"></script>
</body>
</html>
