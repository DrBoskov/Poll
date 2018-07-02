<?php

session_start();
include 'db_connect.php';

  if(isset($_POST["deny"],$_SESSION["username"])){
  	  $friend_id = $_POST["deny"];

 

  $verif1 = $bdd->prepare("DELETE FROM `friends` WHERE `friends`.`id` = ?");
  $verif1->execute([$friend_id]);

}

echo $_POST["deny"];
header("url=friend.php");
?>
