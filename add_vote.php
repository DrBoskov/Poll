<?php
  //  echo $_POST["module1"];
  include 'db_connect.php';
  session_start();
  $mod = unserialize(base64_decode($_POST["modules"]));
if(isset($_SESSION["username"])){
//echo "module# : type : Data <br>";

$idUser=null;
$sql = 'SELECT id FROM user WHERE username=?';
$result = $bdd->prepare($sql);
$result->execute([$_SESSION['username']]);
while($row = $result->fetchColumn()) {
  $idUser=$row;
}
  //pour chaque module de la liste
  foreach ($mod as $key => &$value) {
    $answer = $_POST["module".$key];

  //    echo $key." : ".$value." : ";
      switch($value){
        case "text":
    //    echo $_POST["module".$key];

        //insertion de la réponse ouverte dans la table
        $sql = "INSERT INTO answers (moduleId, data) VALUES (?,?)";
        $result = $bdd->prepare($sql);
        $result->execute([(int)$key,$_POST["module".$key]]);
        //récupération de l'id de la réponse ajoutée
        $sql = 'SELECT id FROM answers WHERE data=?';
        $result = $bdd->prepare($sql);
        $result->execute([$_POST["module".$key]]);
        while($row = $result->fetchColumn()) {
  //        echo $row;
          $textId=$row;
        }
        //on ajoute le vote en lui même
        $sql = "INSERT INTO votes (userID, answerId) VALUES (?,?)";
        $result = $bdd->prepare($sql);
        $result->execute([$idUser,$textId]);

        break;
        case "check":
        case "radio":
        $N = count($answer);
        for($i=0; $i < $N; $i++){
    //      echo $answer[$i]." ";
          //on insère le vote dans la table
          $sql = "INSERT INTO votes (userID, answerId) VALUES (?,?)";
          $result = $bdd->prepare($sql);
          $result->execute([$idUser,$answer[$i]]);
        }
        break;
        default :
        //TODO check timepicker
  //      echo "default<br>";
        break;
      }
  //    echo "<br>";
  }
  //on ajoute l'utilisateur dans la liste des votants
  $sql = "INSERT INTO avote (userId, pollId) VALUES (?,?)";
  $result = $bdd->prepare($sql);
  $result->execute([$idUser,$_POST["pollid"]]);


  //redirection
  ?>
  <div class="container">
    <div class="customcont">
      <h5 class="header center teal-text text-lighten-2">Information</h5>
      <p>Votre vote a été ajouté avec succès. Vous allez bientôt être redirigé.</p>
    </div>
  </div>

  <?php

  $sql = " SELECT displayresult FROM polls WHERE id = ?";
  $result = $bdd->prepare($sql);
  $result->execute([$_POST["pollid"]]);
  $row = $result->fetchColumn();
  if($row){
   header("refresh:5;url=results.php?id=".$_POST['pollid']);
  }else{
    header("refresh:5;url=index.php");
  }


}
?>
