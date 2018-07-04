<?php
session_start();
?>
<html lang="en">

<?php
include "header.php";
echo "<body>";
include 'navbar.php';
?>



    <div class="container">
      <br><br>
      <h1 class="header center teal-text text-lighten-2">Woui</h1>
      <div class="row center">

      </div>
      <div class="row center">
        <p>  Already have an account ?
          <a href="login.php"class="waves-effect waves-light btn">Sign In !</a>
        </p>
      </div>

    </div>




	<!-- Partie à remplir pour l'inscription -->
    <div class="container">
      <div class = "customcont">
        <br><br>
        <h5 class="header center teal-text text-lighten-2">Sign Up</h5>
        <div class="row center">
          <form class="form-horizontal" method="post" action="Register.php">

            <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Account Name</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="username" id="username" required placeholder="Enter you account name"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="cols-sm-2 control-label">Email</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span id="checkemail" class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="email" class="form-control" name="email" id="email" required placeholder="Enter Your Email"/>
                </div>
              </div>
            </div>



            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Password</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="password" id="password" required placeholder="Enter you password"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="confirm" class="cols-sm-2 control-label">Confrim Passowrd</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span id="confirmpassword" class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="confirm" id="confirm" required placeholder="Enter you password"/>
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
