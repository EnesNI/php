<?php

include_once('config.php');

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $username=$_POST['username'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $temPass=$_POST['password'];
    $password=password_hash($temPass, PASSWORD_DEFAULT);

    if(empty($name)  ||empty($username)  ||empty($surname)  ||empty($email)  ||empty($password)  )
{
    echo"you meed to fill all fields";
}else{
    $sql="SELECT username FROM users WHERE username=:username";

    $tempSQL=$coon->prepare($sql);
    $tempSQL->blindParam('username',$username);
    $tempSQL->execute();

    if($tempSQL->rowCount()>0){
        echo "username exists!";
        header("refresh:2; url=signup.php");
    }else{
        $sql="INSERT into users(name,surname,username,email,password) values (:name,:surname,:username,:email,:password)";
        $insertSQL=$coon->prepare($sql);

        $insertSQL->bindParam(':username',$username);
        $insertSQL->bindParam(':name',$name); 
        $insertSQL->bindParam(':surname',$surname);
        $insertSQL->bindParam(':email',$email);
        $insertSQL->bindParam(':password',$password);

        $insertSQL->execute();
        echo "Data saved succesfully ...";
        header("refresh:2; url=login.php");
    }

}