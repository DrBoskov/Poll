<nav>
  <div class="nav-wrapper teal lighten-1">
    <a href="index.php" class="brand-logo"><img src="img/logo.svg" height=70 width = 70></img></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="friend.php"><b>Friends</b></a></li>
      <li><a href="new_poll.php"><b>Surveys</b></a></li>
      <li><a <?php
      if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true && isset($_SESSION['username'])) {
        echo 'href="profil.php">';
        echo '<span class="glyphicon glyphicon-user"></span>';
        echo '<b>'.$_SESSION['username'].'</b>';
      }
      else {
        echo 'href="SignUp.php">';
        echo '<span class="glyphicon glyphicon-user"></span>';
        echo '<b> Sign Up </b>' ;
      }
      ?>
    </a></li>
      <li> <?php
      if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true && isset($_SESSION['username'])) {

        echo ' <a href="disconnect.php"> <span class="glyphicon glyphicon-log-out"></span><b> Disconnect </b></a>';
      }
      else {
        echo '<a href="logIn.php"> <span class="glyphicon glyphicon-log-out"></span> <b> Sign In</b> </a>';
      }?></li>
    </ul>
  </div>
</nav>
