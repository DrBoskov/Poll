
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
          //vérification de vote précédent de cet utilisateur sur ce sondage
          $sql = 'SELECT * FROM avote,user WHERE username=? and userid=user.id and pollId=?';
          $result = $bdd->prepare($sql);
          $result->execute([$_SESSION["username"],$_GET["id"]]);
          $donnees = $result->fetch();
          if ( $result->rowCount()>0){
            echo "Vous avez déjà participé à ce sondage.";
          }else{


          //récupération des informations du sondage
          $sql = 'SELECT title,name FROM polls,user WHERE polls.id=? and creatorId= user.id';
          $result = $bdd->prepare($sql);
          $result->execute([$_GET['id']]);
          $donnees = $result->fetch();
          if ( $result->rowCount()>0){
            echo  '<h5 class="header center teal-text text-lighten-2">'.$donnees["title"].'</h5>';
            echo '<p class="center">Sondage par '.$donnees["name"].'</p>';

            //Traitements des Modules
            $nbmod = 0;
            $sql ='SELECT * FROM modules WHERE pollId =?';
            $mod = $bdd->prepare($sql);
            $mod->execute([$_GET['id']]);
            echo "<form  action='add_vote.php' method='post' >";
              //ce tableau sert à garder en mémoire les types de modules.
              $moduleList = array();

            //boucle module
            while ($donnees = $mod->fetch()) {
              $nbmod++;
              echo  '<div id = "option_area" class="col s8 offset-s2 ">';
              echo  ' <h6 class="center" >'.  $donnees["question"].'</h6>';

              //options :
              $sql ='SELECT * FROM options WHERE moduleId =? ';
              $opt = $bdd->prepare($sql);
              $opt->execute([$donnees["id"]]);
              $options = $opt->fetch();

              //on ajoute le type du module actuel à la liste des modules.
              $moduleList[$donnees["id"]] = $options["type"];
              //traitement différent en fonction du type de question
              switch($options["type"]) {
                case "text":
                ?>
                <div class="row">
                  <div class="input-field col s12">
                    <textarea name= <?php echo "module".$donnees["id"]; ?> class="materialize-textarea"></textarea>
                    <label for="module">Réponse</label>
                  </div>
                </div>
                <?php
                break;
                case "check":

                //selectionner toutes les réponses correspondants à ce module
                $sql ='SELECT * FROM answers WHERE moduleId =?';
                $ans = $bdd->prepare($sql);
                $ans->execute([$donnees["id"]]);


                while($answers = $ans->fetch()){
                  ?>

                <label>
                  <input name = <?php echo "module".$donnees["id"]."[]"; ?> type="checkbox" value = "<?php echo $answers["id"];?>"/>
                  <span><?php echo $answers["data"];?></span>
                </label>
                <br>

                <?php
                }

                break;
                case "radio":
                $sql ='SELECT * FROM answers WHERE moduleId =?';
                $ans = $bdd->prepare($sql);
                $ans->execute([$donnees["id"]]);


                while($answers = $ans->fetch()){
                  ?>

                <label>
                  <input name = <?php echo "module".$donnees["id"]."[]"; ?> type="radio" value = "<?php echo $answers["id"];?>"/>
                  <span><?php echo $answers["data"];?></span>
                </label>
                <br>

                <?php
                }
                break;
                case "doodle":
                ?>
                <label>
                  <input type="text" class="datepicker">
                </label>
                <?php
                echo "todo";
                break;
                default:
                echo "default";
              }
              echo "</div>";
            }
            //fin boucle module
          //on encode la lsite des modules, avec leur type pour faciliter le traitement en aval, et on le passe en argument
               echo '<input name="modules" type="hidden" value="'.base64_encode(serialize($moduleList)). '">';
               //ainsi que l'id du poll
               echo '<input name="pollid" type="hidden" value="'.$_GET["id"]. '">';

            echo '<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Valider</button>';
            echo "</form>";
            echo "</div>";

        }
        else{
          echo "Ce sondage n'existe pas, veuillez réessayer.";
        }
      }
    }else{
      echo "Veuillez vous connecter pour afficher cette page.";
    }
  }
    ?>
  </div>
</div>
</div>

</script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
</body>
</html>
