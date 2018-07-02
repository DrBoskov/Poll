<!DOCTYPE html>
<html lang="en">
<?php
  session_start();
  $_SESSION["current_page"] = "profile";

  include "header.php";
  echo "<body>";
  include "navbar.php";
  include 'db_connect.php';

  $sql = 'SELECT id FROM user WHERE username=?';
  $result = $bdd->prepare($sql);
  $result->execute([$_SESSION['username']]);
  $creator_Id = $result->fetchColumn();

  $sql = 'SELECT * FROM polls WHERE creatorId=?';
  $result = $bdd->prepare($sql);
  $result->execute([$creator_Id]);
  if($result->rowCount()==0){
    echo "Vous n'avez pas encore créé de sondages. ";
    echo "  <a href='new_poll.php'class='waves-effect waves-light bt'>Créer un sondage</a>";
  }else{
    while ($donnees = $result->fetch()) {
      ?>
      <div class="row">
      <div class="col s12 m3">
        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
            <div class="card-title"><?php echo $donnees["title"].""?></div>
             <blockquote>
            <?php
            $sql = "SELECT modules.*,options.type as type FROM modules,options WHERE pollId = ? and modules.id = moduleID";
            $res = $bdd->prepare($sql);
            $res->execute([$donnees["id"]]);
            while ($mod = $res->fetch()){
              echo $mod["question"].'<br>';
            }
            ?>
          </blockquote>
          </div>
          <div class="card-action">
            <a href=<?php echo '"results.php?id='.$donnees["id"].'"';?>>Voir les resultats</a>
          </div>
        </div>
      </div>
    </div>
    <?php
    }
  }
    ?>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
</body>
</html>
