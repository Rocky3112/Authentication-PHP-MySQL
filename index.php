<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'authentication');

$unsuccessfulmsg = '';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        // Retrieve the hashed password from the database
        $sql = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $sql->bind_param("s", $email);
        $sql->execute();
        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row['password'];

            // Check if the entered password matches the hashed password
            if (password_verify($password, $hashedPassword)) {
                echo "Found";
            } else {
                echo "Not Found: Incorrect password";
            }
        } else {
            echo "Not Found: User not found";
        }

        $sql->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>

<div class="main">
    <div class="formContainer">
        <h2>Login</h2>
        <form action="" method="POST">
            <input class="inputAll" type="email" name="email" required>
            <br>
            <input class="inputAll" type="password" name="password" required>
            <br>
            <button type="submit" name="submit">Login</button>
        </form>
        <?php
        // Display error message if set
        if ($unsuccessfulmsg) {
            echo '<div style="color: red;">' . $unsuccessfulmsg . '</div>';
        }
        ?>
    </div>
</div>

</body>
</html>
