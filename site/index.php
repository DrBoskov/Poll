<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include 'db_connect.php';


if(isset($_POST["username"], $_POST["password"]))
{
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = $bdd->prepare('SELECT username, password FROM user WHERE username = ?');
  $result->execute([$username]);

  if ($result->rowCount() > 0)
  {

    include 'encryption.php';
    $data = $result->fetch();

    if(check($data['password'], $password)) {
      $_SESSION["logged_in"] = true;
      $_SESSION["username"] = $username;
    }
  }
}

include "header.php";
echo "<body>";
include "navbar.php";

?>

<div id="index-banner" class="parallax-container">
  <div class="section no-pad-bot">
    <div class="container">
      <br><br>
      <h1 class="header center teal-text text-lighten-2">Woui</h1>
      <div class="row center">
        <h5 class="header col s12 light"Une approche personalisée pour répondre à vos questions.</h5>
        </div>
        <div class="row center">
          <a href="new_poll.php" id="create_button" class="btn-large waves-effect waves-light teal lighten-1">Créer votre sondage</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="img/background1.jpg"></div>
  </div>


  <div class="container">
    <div class = "customcont">
      <div class="section">

        <!--   Icon Section   -->
        <div class="row">
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
              <h5 class="center">Choix rapide entre amis</h5>

              <p class="light">Vous cherchez à vous mettre d'accord sur un restaurant ? Vous voulez savoir si vos amis vous préfère avec les cheveux bleus ou rouges ? Utilisez notre outil !</p>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center brown-text"><i class="material-icons">edit</i></h2>
              <h5 class="center">Sondage personalisé</h5>

              <p class="light">Nous mettons à votre disposition un outill modulaire de création de sondage à questions multiple. Choisissez entre les différents types de questions et les modes de votes pour concocter le sondage parfait.</p>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
              <h5 class="center">Export des resultats</h5>

              <p class="light">Une fois votre enquête finie, nous vous proposons la possibilité d'exporter les résultats pour une meilleure présentation.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">À Propos</h5>
          <p class="grey-text text-lighten-4">  Etudiants en troisième année à l'<a  class="white-text" href="https://www.univ-rennes1.fr/">université de Rennes 1</a> <br>ce site constitue notre projet de fin d'année.<br>
            Il s'agit d'un travail en cours, nous l'enrichirons dans les semaines à venir !
            <br>
            Valentin Petit, Kévin Chertier, Antoine Mousserion, Ségolène Poisson, Romain Olivo, et Luc Powell.</p>

          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          <!--    Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>-->
        </div>
      </div>
    </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

  </body>
  </html>
