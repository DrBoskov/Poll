<?php
session_start();
$_SESSION["current_page"] = "poll";
?>
<!DOCTYPE html>
<html lang="en">


<?php
include 'header.php';
echo "<body>";
include 'navbar.php';
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
    <br><br>
    <div class="row center">
      <?php
      if(isset($_SESSION["username"])){
        ?>
        <br><br>
        <h5 class="header center teal-text text-lighten-2">Nouveau sondage</h5>
        <!-- ancienne place du title -->

        <div class = "row"><!--
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
  </div>-->
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
      <!-- <div class="input-field col s7" style= " float :right;">
      <input placeholder="" id="nb_rep" type="text" class="validate">
      <label for="nb_rep">Nombre de réponses max. (opt)</label>
    </div> -->

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

          <!--</div>
          <input type="button" class="waves-effect waves-teal btn-flat" id="add_button" value="Ajouter un champ de réponse" />-->


          <input id="hidden_mult" name="ModuleType" type="hidden" value="radio">

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

<?php
}
else{
  ?>

  <h5 class="header center teal-text text-lighten-2">Nouveau sondage</h5>
  <p>Pour créer un sondage, <a href="logIn.php" class="waves-effect waves-light btn">Connectez vous</a>
    Pas de compte ? <a href="SignUp.php" class="waves-effect waves-light btn">inscrivez vous</a><br/></p>
  </div>
  <br><br>
</div>
</div>



<?php
}
?>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>
