
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our PHP form</title>
</head>
<body>
    <form action="index.php" method="GET">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Username"><br><br>
        <label for="password">Password</label>
        <input type="text" id="password" name="password" placeholder="password"><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>




<?php
$username = $_GET['username'];
$password = $_GET['password'];
echo $username;
echo "<br>";
echo $password;
?>