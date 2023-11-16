<?php
require_once 'auth.php';


if (!isAuthenticated()) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>

<div class="main">
    <h2>Welcome to the Home Page</h2>
    <?php
    if (isAuthenticated()) {
        echo '<script>alert("Login successful");</script>';
    }
    ?>
    <p>This is a protected page. Only logged-in users can access this content.</p>
    <a href="logout.php">Logout</a>
</div>

</body>
</html>
