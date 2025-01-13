<?php
$user="root";
$pass="";
$_SERVER="localhost";
$dbname="db";

try{
    $coon=new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
}catch(PDOExeption $e){
    echo "error" . $e->getMessage();

}
?>