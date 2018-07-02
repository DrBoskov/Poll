<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include 'header.php';
echo "<body>";
include 'navbar.php';
?>

<div id="index-banner" class="parallax-container">
  <div class="section no-pad-bot">
    <div class="container">
      <br><br>
      <h1 class="header center teal-text text-lighten-2">Woui</h1>
      <div class="row center">

      </div>
      <div class="row center">
        <p>Pas de compte ? <a href="SignUp.php"class="waves-effect waves-light btn">Inscrivez-vous !</a>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/background1.jpg"></div>
  </div>


  <div class="container">
    <div class = "customcont">
      <div class="row center">
        <div class="row" id="pwd-container">
          <br><br>
          <h5 class="header center teal-text text-lighten-2">Connexion</h5>

          <section class="login-form">
            <form method="post" action="index.php" role="login">
              <input type="text" name="username" required class="form-control input-lg" placeholder="Pseudonyme"
              required="" />
              <br>
              <input type="password" class="form-control input-lg" name="password" placeholder="Mot de passe"
              required="" />
              <div class="pwstrength_viewport_progress"></div>
              <br>
              <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Se connecter</button>
            </form>
          </section>
        </div>
      </div>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
</body>
</html>
