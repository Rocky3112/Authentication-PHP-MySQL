<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body >

<section class="mainContainer">
<div class="signup-container">
    <h2>Sign Up</h2>
    <form action="signUp.php" method="post">
        <input type="text" name="firstName" placeholder="First Name" required>
        <br>
        <input type="text" name="lastName" placeholder="Last Name" required>
        <br>
        <input type="email" name="email" placeholder="Email" required>
        <br>
        <input type="password" name="password" placeholder="Password" required>
        <br>
        <button type="submit">Sign Up</button>
    </form>
    <a href="index.php">Already have an account? Log In</a>
</div>
</section>

</body>
</html>
