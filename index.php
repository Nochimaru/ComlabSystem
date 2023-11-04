<?php
include("loginconnection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comlab Inventory System</title>
    <link rel="stylesheet" type="text/css" href="styleindex.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>

    <?php $displayValue = "block";
    ?>
</head>
<body>
    <div id="form">
        <h1>Login Form</h1>
        <form name="form" action="login.php" method = "POST">
            <label>Username: </label>
            <input type="text" id="user" name="user"><br><br>
            <label>Password: </label>
            <input type="password" id="pass" name="pass"><br><br>
            <p class="error">Invalid Username or Password</p>
            <input type="submit" id="btn" value="Login" name="submit">

        </form?>
    </div>
</body>
</html>