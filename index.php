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

echo'<head>
  <title></title>
  <link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">';

  include 'header.php';

echo '</head>';


include "navbar.php";
?>

<body>
   <h1 class="header center teal-text text-lighten-1" style="font-family: 'Galada', cursive;">LP Surveys</h1>


<div class="container">
    <br><br>
    <div class="row center">
        <!-- ancienne place du title -->

        <div class = "row">
          <div id = "left_area" class="col s2">
          <div id = "list_area">
          <div class="divider"></div>

          <div class="section" id="module">
          <p>Question</p><br>
          <input type="button" class="waves-effect waves-light btn" value="Delete" />
          <div class="divider"></div>
        </div>

      </div>
      <div id = "cmd_area">
      <input type="button" class="waves-effect waves-light btn" id="add_mod" value="Ajouter un module" /><br>

      <input type="button" class="waves-effect waves-light btn" value="Prévisualiser" /><br>

      <input type="button" class="waves-effect waves-light btn" value="Finir et envoyer" />
    </div>
  </div>
  <div id = "main_area">
    <div id = "option_area" class="col s3">
      <h5>Options</h5><br>
      <!--------- Choix du poll ------>
      <p class="col s12 m6 l4" style = "padding: 0 0;">
        <label>
          <input id="opt_rep" class="with-gap" name="group1" type="radio" checked />
          <span style="padding-left: 25px; color : black;">Questions</span>
        </label>
      </p>
      <p class="col s12 m6 l4" style = "padding: 0 0;">
        <label>
          <input id="opt_texte" class="with-gap" name="group1" type="radio" />
          <span style="padding-left: 25px; color : black;"> Texte </span>
        </label>
      </p>
      <p class="col s12 m6 l4" style = "padding: 0 0;">
        <label>
          <input id="opt_date" class="with-gap" name="group1" type="radio"  />
          <span style="padding-left: 25px; color : black;">Calendrier</span>
        </label>
      </p>
      <br>
      <!-- Switch Reponses Multiples-->
      <div class="switch" id="div_rep_mult">
        <label style ="color : black; font-size: 1rem">
          <!-- réponse unique -->
          <input type="checkbox" id="rep_mult">
          <span class="lever"></span>
          réponses multiples
        </label><br>
      </div>


      <!-- choix du nb de rep si multiples -->

  </div>
  <div id = "right_area" class="col s7">
    <div class = "container">
      <br><br>
      <form id="poll" method="post" action="confirm_poll.php">
        <div class="input-field inline">
          <input name = "titre" id="title" type="text" class="validate" placeholder="Titre">
        </div>
        <br>
        <label for="question">Question* : </label>
        <input type="text" name="question" id="question" placeholder="Entrez votre question." required /><br/>

        <div id="rep">
          <label for="choice1">Réponse* : </label>
          <input type="text" name="choice1" id="choice1" placeholder="Première réponse." required /><br/>

          <label for="choice2">Réponse* : </label>
          <input type="text" name="choice2" id="choice2" placeholder="Deuxième réponse." required /><br/>

          <!--<div id="add_answer">-->
          <label for="choice3">Réponse : </label>
          <input type="text" name="choice3" id="choice3" placeholder="Troisième réponse."/><br/>

          </div>
        </div>

        <div id="texte">
          <textarea disabled id="textarea" placeholder="Réponse ouverte." class="materialize-textarea" data-length="120"></textarea>
          <input name="ModuleType" type="hidden" value="text">
        </div>

        <div id="date">
          <input disabled id="date_choice" type="date" class="datepicker">
          <input name="ModuleType" type="hidden" value="doodle">
        </div>

        <div>
          <label>
            <input name = "rep" type="checkbox" value = "oui"/>
          <span>Autoriser les votants à acceder aux réponses</span>
        </label>
        </div>

        <input type="submit" class="waves-effect waves-light btn" value="Envoyer" />



      </form>
      <p>* champ requis.<br/></p>
    </div>
  </div>
</div>
<script src="js/new_poll.js"></script>
</div>



        <div class="row center">
          <a href="SignUp.php" id="create_button" class="btn-large waves-effect waves-light teal lighten-1">Create Account</a>
        </div>

      </div>
    </div>
    
  </div>


  <div class="container">
      <div class="section">

        <!--   Icon Section   -->
        <div class="row">


          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center brown-text"><i class="material-icons">edit</i></h2>
              <h5 class="center">Personalized Surveys</h5>

              <p class="center light"> We provide, easy to set up, highly customizable surveys to suit 

              Nous mettons à votre disposition un outill modulaire de création de sondage à questions multiple. Choisissez entre les différents types de questions et les modes de votes pour concocter le sondage parfait.</p>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
              <h5 class="center">Fast and Easy</h5>

              <p class="center light">Need a quick and easy way to organise an event ? 
               This tool is perfect for you !</p>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
              <h5 class="center">Export des resultats</h5>

              <p class="center light">Une fois votre enquête finie, nous vous proposons la possibilité d'exporter les résultats pour une meilleure présentation.</p>
            </div>
          </div>
        </div>
      </div>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

  </body>
  </html>
