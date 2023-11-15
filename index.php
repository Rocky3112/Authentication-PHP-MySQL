<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <link rel="stylesheet" href="./styles.css">

</head>

<body class="main">
    <div class="formContainer">
        <div class="formControl">
        <form action="index.php" method="POST">
            <input class="inputAll" type="email" name="email" placeholder="Email Address" required>
            <br>
            <input class="inputAll" type="password" name="password" placeholder="Password" required>
            <br>
           
            <div class="btn">
                <button type="submit">Send</button>
            </div>

            <a href="signUp.php">Already have an account? Log In</a>
        </form>
        </div>
    </div>
</body>

</html>
<?php

?>