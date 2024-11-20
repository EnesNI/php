<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=db", "root", "");

    //Table alteration SQL
    $sql = "DROP TABLE users";

    $pdo -> exec($sql);

    echo "Column deleted succsesfuly!!!";
}catch(PDOException $e){
    echo "Error catching column: ".$e->getmessage();
}


?>

