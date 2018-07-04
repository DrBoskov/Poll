<?php

session_start();
include 'db_connect.php';

  if(isset($_POST["accept"],$_SESSION["username"])){
      $friend_id = $_POST["accept"];

 

  $verif1 = $bdd->prepare("UPDATE `friends` SET `status` = 'accepted' WHERE `friends`.`id` = ?");
  $verif1->execute([$friend_id]);

}

echo$_POST["accept"];


header("refresh:0;url=friend.php");
?>
