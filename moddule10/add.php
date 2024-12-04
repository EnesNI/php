<?php
include_once("comfig.php");
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $surname=$_POST['surname'] ;
  $email=$_POST['email'] ;

  $sql="INSERT INTO user(name,surname,email) VALUE (:name,:surname,:email)";
  $sqlQuery=$connect->prepare($sql);

  $sqlQuery->bindParam(':name',$name);
  $sqlQuery->bindParam(':surname',$surname);
  $sqlQuery->bindParam(':email',$email);

  $sqlQuery->execute();
  echo "the user was add sucessful"

}
?>