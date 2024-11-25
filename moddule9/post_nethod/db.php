<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "users";

try{
    $connect = new PDO("mysql:host=$server;dbname=$dbnanme", $username, $password);
}

catch(PDOException $e){
    echo "Something went wrong!!";
}


?>