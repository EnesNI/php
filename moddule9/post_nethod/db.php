<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "users";


try {
    $connect = new PDO('mysql:host=localhost;dbname=your_database', 'your_username', 'your_password');
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
