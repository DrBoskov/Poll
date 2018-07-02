<?php
session_start();
include 'db_connect.php';

$id_poll = uniqid('');
$creator_Id = NULL;

$sql = 'SELECT id FROM user WHERE username=?';
$result = $bdd->prepare($sql);
$result->execute([$_SESSION['username']]);
while($row = $result->fetchColumn()) {
  $creator_Id=$row;
}

$sql = 'INSERT INTO polls(id, creatorId, question) VALUES (?, ?, ?)';
$result = $bdd->prepare($sql);
$result->execute([$id_poll, $creator_Id, $_POST['question']]);


$sql = 'INSERT INTO answers(pollId, answer) VALUES (?, ?)';
$result = $bdd->prepare($sql);
$result->execute([$id_poll, $_POST['choice1']]);

$sql = 'INSERT INTO answers(pollId, answer) VALUES (?, ?)';
$result = $bdd->prepare($sql);
$result->execute([$id_poll, $_POST['choice2']]);

if(isset($_POST['choice3']) && $_POST['choice3'] <> "") {
  $sql = 'INSERT INTO answers(pollId, answer) VALUES (?, ?)';
  $result = $bdd->prepare($sql);
  $result->execute([$id_poll, $_POST['choice3']]);
}

	// Redirection direct après création du poll Vers la page de vote

  header('Location: poll.php?id='.$id_poll);
  exit();

?>
