<?php

include_once("add.php");

//isset

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = 'INSERT INTO users(username, email, password) VALUES (:username,:email, :password)';

    $sqlQuery = $connect->prepare($sql);

    $sqlQuery->prepare(':username',$username);
    $sqlQuery->prepare(':email',$email);
    $sqlQuery->prepare(':password',$password);


    $sqlQuery->bindParam();

    echo "the user was added succsessfuly!!!";

}

?>