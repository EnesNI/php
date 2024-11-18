<?php 

$host = 'localhost';
$db = 'db';
$user = "root";
$pass = "";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $username = "Jack";

    $password = password_hash("mypasword", PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(username, password) VALUES ('$username', '$password')";

    $pdo -> exec($sql);

    echo "New record created successfully";

}catch(PDOException $e){
    echo $e->getMessage();
}

?>