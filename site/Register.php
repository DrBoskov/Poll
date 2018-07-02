<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<?php
include "header.php";
echo "<body>";
include 'navbar.php';
include 'db_connect.php';


/* Vérification de la validité du captcha *//*
if ($_POST["captcha"] != $_SESSION['captcha']){
		header("refresh:0;url=signup.php");
		die();
}
else{*/
	/* Verifie si les champs du formulaire d'inscription ont été remplis */
	if(isset($_POST["name"], $_POST["email"], $_POST["username"], $_POST["confirm"])){

		$email = $_POST["email"];
		$username = $_POST["username"];
		$name = $_POST["name"];
	  
		include 'encryption.php';

		/* Recupere dans la base de donnee si le nom d'utilisateur est deja utilise ou non */
		$password = encrypt($_POST["password"]);
		$verif = $bdd->prepare("SELECT SQL_CALC_FOUND_ROWS `username` FROM `user` WHERE `username` = ?");
		$verif->execute([$username]);

		if($verif ->rowCount() == 0){
			$ajout = $bdd->prepare("INSERT INTO `user` (`id`, `username`, `name`, `password`, `email`) VALUES (NULL ,?,?,?,?)");
			$ajout->execute([$username ,$name, $password ,$email]);
		}
	}
//}

?>

<div class="container">
  <div class="customcont">
    <h5 class="header center teal-text text-lighten-2">Information</h5>
    <p>Votre compte a été créé avec succès. Vous allez bientôt être redirigé vers la page de connexion.</p>
  </div>
</div>

<?php header("refresh:5;url=login.php");?>

</body>
</html>
