
<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$_SESSION["current_page"] = "poll";
include 'header.php';
echo "<body>";


include 'navbar.php';
include 'db_connect.php';
?>
<div id="index-banner" class="parallax-container">
  <div class="section no-pad-bot">
    <div class="container">
      <br><br>
      <h1 class="header center teal-text text-lighten-2">Woui</h1>
    </div>
  </div>
  <div class="parallax"><img src="img/background1.jpg"></div>
</div>

  <div class="container">
    <div class = "customcont">
      <div class="row justify-content-center">

        <?php
        if(isset($_SESSION["username"])){
          if(isset($_GET['id'])) {

            //on recupere le titre du sondage
            $sql = "SELECT title from polls WHERE polls.id = ?";
            $result = $bdd->prepare($sql);
            $result->execute([$_GET["id"]]);
            $donnees = $result->fetch();

            //si le sondage existe
            if($result->rowCount()>0){
                  //si les résultats peuvent être affich"s au public ou si l'utilisateur est le créateur
                  $sql = "SELECT displayresult from polls WHERE polls.id = ?";
                  $isAllowed = $bdd->prepare($sql);
                  $isAllowed->execute([$_GET["id"]]);
                  $allowed = $isAllowed->fetch();

                  $sql = "SELECT title FROM polls,user WHERE polls.id = ? and creatorId = user.id AND username = ?";
                  $creator = $bdd->prepare($sql);
                  $creator->execute([$_GET["id"],$_SESSION["username"]]);
                  $isCreator = $creator->fetch();
                  $nb = ($creator->rowCount());
                
              if($allowed["displayresult"] || $nb>0){
              echo  '<h5 class="header center teal-text text-lighten-2">'.$donnees["title"].'</h5>';

              //boucle sur les modules de ce polls
              $sql = "SELECT modules.*,options.type as type FROM modules,options WHERE pollId = ? and modules.id = moduleID";
              $result = $bdd->prepare($sql);
              $result->execute([$_GET["id"]]);
              while ($donnees = $result->fetch()){
                  echo  '<div id = "option_area" class="col s8 offset-s2 ">';
                echo  ' <h6 class="center" >'.  $donnees["question"].'</h6>';
                //boucle sur les réponses de ce modules
                //TODO présentation en fonction du type
                $modId = $donnees["id"];
                $sql = "SELECT * FROM answers WHERE moduleId = ?";
                $res = $bdd->prepare($sql);
                $res->execute([$modId]);
                ?>
                <table class="striped">
                  <thead>
                  <tr>
                    <th>Reponse</th>
                    <?php if ($donnees["type"]!="text"){ ?>
                    <th>Nombre de vote</th>
                  <?php }?>
                  </tr>
                </thead>
                <tbody>
                <?php

                while($votes = $res->fetch()){
                  echo "<tr>";

                  $ansId = $votes["id"];
                  $sql = "SELECT count(*) AS nbVote FROM votes WHERE answerId =?";
                  $vote = $bdd->prepare($sql);
                  $vote->execute([$ansId]);
                  $nb = $vote->fetch();
                  echo "<td>";
                  if ($donnees["type"]=="text"){
                    echo $votes["data"];
                  }else{
                      echo $votes["data"];
                      echo "</td>";
                      echo "<td>";
                      echo $nb["nbVote"];
                  }
                    echo "</td>";
                    echo "</tr>";
                //boucle sur les votes ?
                }
                echo "</tbody>";
                echo "</table>";
                echo "</div>";
              }


              $path = dirname('http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
              echo '<input type="text" value="'.$path.'/poll.php?id='.$_GET['id'].'" id="myInput">';

              echo '<button class="waves-effect waves-light btn" onclick="copy()">Copier le lien de partage</button>';





            }
            else{
              echo "Vous n'avez pas la permission d'acceder à cette page.";
            }
          }
          }else{
            echo "ce sondage n'existe pas, merci de réessayer.";
          }
        }else{
          echo "Merci de vous connecter pour acceder à cette page.";
        }
        ?>
      </div>
    </div>
  </div>

  <script>
    function copy() {
      var copyText = document.getElementById("myInput");
      copyText.select();
      document.execCommand("copy");
      M.toast({html: 'Lien copié !'})
   }
  </script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
</body>
</html>
