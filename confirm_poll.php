
<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$_SESSION["current_page"] = "poll";
include 'db_connect.php';
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
    <div class="row justify-content-center" id="idconfirm">
      <?php
      if(isset($_SESSION["username"])){



        //generer uuid
        $pollId = uniqid();

        //recuperer id user
        $sql = 'SELECT id FROM user WHERE username=?';
        $result = $bdd->prepare($sql);
        $result->execute([$_SESSION['username']]);
        $row = $result->fetchColumn();
        $idUser=$row;

        //poll
        //id, titre et displayresult
        if (isset($_POST['titre'])) {
          $sql = "INSERT INTO polls(`id`,`creatorId`, `title`, `displayresult`) VALUES (?,?,?,?)";
          $result = $bdd->prepare($sql);
          $result->execute([$pollId,$idUser,$_POST['titre'],isset($_POST['rep'])]);
        }else{
          $sql = "INSERT INTO polls(`id`,`creatorId`, `displayresult`) VALUES (?,?)";
          $result = $bdd->prepare($sql);
          $result->execute([$pollId,$idUser,isset($_POST['rep'])]);
        }


        //module
        //pollId et question
        $sql = "INSERT INTO modules(`pollId`,`question`) VALUES (?,?)";
        $result = $bdd->prepare($sql);
        $result->execute([$pollId,$_POST['question']]);

        //recupérer l'id du module
        $sql = "SELECT id FROM modules WHERE pollId=? AND question=?";
        $result = $bdd->prepare($sql);
        $result->execute([$pollId,$_POST['question']]);
        $row = $result->fetchColumn();
        $modId = $row;

        //Options
        $sql = "INSERT INTO options(`moduleId`,`type`,`maxrep`) VALUES (?,?,?)";
        $result = $bdd->prepare($sql);
        $result->execute([$modId,$_POST['ModuleType'],0]);

        //modules
        switch($_POST['ModuleType']){
          case "radio":
          case "check":
            $i = 1;
            $moreRes = true;
            while($moreRes){
              if(isset($_POST["choice".$i])){
                if($_POST["choice".$i]!=""){
                  $sql = "INSERT INTO answers(`moduleId`,`data`) VALUES (?,?)";
                  $result = $bdd->prepare($sql);
                  $result->execute([$modId,$_POST["choice".$i]]);
                }
              }else{
                $moreRes = false;
              }
              $i++;
            }
            break;
            case "text":
          case "doodle":
          // pas de choix à proposer
          default:
            break;
        }

      }
      $path = dirname('http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
      echo "<h5> Votre sondage a été ajouté ! </h5>";
      echo '<input type="text" value="'.$path.'/poll.php?id='.$pollId.'" id="myInput">';

      echo '<button class="waves-effect waves-light btn" id="btnConfirm" onclick="copy()">Copier le lien de partage</button>';

      echo '<a href='.$path.'/poll.php?id='.$pollId.'><button class="waves-effect waves-light btn" id="btnConfirm">Acceder à votre sondage</button></a>';
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
