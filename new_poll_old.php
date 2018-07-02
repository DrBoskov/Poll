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


        <div class = "container">
          <br><br>
          <h5 class="header center teal-text text-lighten-2">Nouveau sondage</h5>
          <form method="post" action="create_poll.php">

            <label for="question">Question* : </label>
            <input type="text" name="question" id="question" size="35" placeholder="Ex : What's you favorite color ?" required /><br/>

            <label for="choice1">Answer 1* : </label>
            <input type="text" name="choice1" id="choice1" size="35" placeholder="Ex : Blue." required /><br/>

            <label for="choice2">Answer 2* : </label>
            <input type="text" name="choice2" id="choice2" size="35" placeholder="Ex : Red." required /><br/>

            <label for="choice3">Answer 3 : </label>
            <input type="text" name="choice3" id="choice3" size="35" placeholder="Ex : Green."/><br/>

            <input type="submit" class="waves-effect waves-light btn" value="Create poll" />


          </form>
          <p>* champ requis.<br/></p>
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
