<?php
session_start();
?>
<html lang="en">

<?php
include "header.php";
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
        <p>  Déjà un compte ?
          <a href="login.php"class="waves-effect waves-light btn">Connectez-vous !</a>
        </p>
      </div>

    </div>
  </div>
  <div class="parallax"><img src="img/background1.jpg"></div>
</div>


	<!-- Partie à remplir pour l'inscription -->
    <div class="container">
      <div class = "customcont">
        <br><br>
        <h5 class="header center teal-text text-lighten-2">S'enregistrer</h5>
        <div class="row center">
          <form class="form-horizontal" method="post" action="Register.php">

            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Nom</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="name" id="name" required placeholder="Entrez votre nom"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="cols-sm-2 control-label">Mail</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span id="checkemail" class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="email" class="form-control" name="email" id="email" required placeholder="Entrez votre mail"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Pseudonyme</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="username" id="username" required placeholder="Entrez votre pseudonyme"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Mot de passe</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="password" id="password" required placeholder="Entrez votre mot de passe"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="confirm" class="cols-sm-2 control-label">Confirmation de mot de passe</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span id="confirmpassword" class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="confirm" id="confirm" required placeholder="Confirmez votre mot de passe"/>
                </div>
              </div>
            </div>

			<!--
			<div class="form-group">
              <label for="confirm" class="cols-sm-2 control-label">Copier le captcha</label>
              <br><br>
			  <div class="cols-sm-10">
					<img src="captcha.php" />
                <div class="input-group">
                  <span id="confirmpassword" class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="captcha" id="captcha" required placeholder="Copier le captcha"/>
                </div>
              </div>
            </div>
			-->
			
            <br>

            <div class="form-group ">
              <span id="submit"></span>
              <input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="S'inscrire"></input>
            </div>			
          </form>
          <script src="js/register.js"></script>
        </div>
        <br><br>
      </div>
</div>


<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>
