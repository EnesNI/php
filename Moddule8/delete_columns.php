<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=db", "root", "");

    //Table alteration SQL
    $sql = "ALTER TABLE users DROP COLUMN email";

    $pdo -> exec($sql);

    echo "Column deleted succsesfuly!!!";
}catch(PDOException $e){
    echo "Error catching column: ".$e->getmessage();
}

?>