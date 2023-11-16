<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/a008b2dede.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>

<header>
    <nav class="navBar">
        <div>
            <h2 cl>AH@AR</h2>
        </div>
        <div class="navContainer">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="index.php">Blog</a></li>
                <!-- <li><a href="login.php">Log In</a></li>
                <li><a href="logOut.php">Log Out</a></li> -->
                <?php
                require_once 'auth.php';
                 if(isAuthenticated()){
                    echo '<li><a href="logOut.php">Log Out</a></li>';

                 }
                 else{
                    echo '<li><a href="login.php">Log In</a></li>';
                 }
                ?>
            </ul>
        </div>
    </nav>
</header>
</body>
</html>