<?php
try{
    $pdo = new PDO("mysql:hopst=localhost;dbname=db", "root", "");

    //Table alteration SQL
    $sql = "ALTER TABLE users ADD email VARCHAR(255)"

    $pdo -> exec($sql);

    echo "Column created succsesfuly!!!";
}catch(PDOException $e){
    echo "Error catching column: ".$e->getmessage();
}

?>