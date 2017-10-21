<?php
require "lib/gettext/localization.php";

if(isset($_POST['email']) && isset($_POST['password'])) {
	try {
		$bdd = new PDO('mysql:unix_socket=/opt/lampp/var/mysql/mysql.sock;mysql:host=localhost;dbname=admin;charset=utf8', 'root', '');
	}
	catch(Exception $e) {
		die('Erreur : '.$e->getMessage());
	}
	$req = "SELECT * FROM connect";
	$i=0;
	$identifiant = $bdd->query($req);
  	while($ul = $identifiant->fetch()){
  		$email[$i] = $ul['email'];
  		$password[$i] = $ul['password'];
  		$lastname[$i] = $ul['nom'];
  		$firstname[$i] = $ul['prenom'];
  		$i++;
  	}
  	for($j=0; $j<=2; $j++) {
  		if($email[$j] == $_POST['email'] && $password[$j] == $_POST['password']) {
  			session_start ();
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['password'] = $_POST['password'];
			$_SESSION['nom'] = $lastname[$j];
			$_SESSION['prenom'] = $firstname[$j];
			echo '<meta http-equiv="refresh" content="0;URL=admin.php">';
			break;
		}
	}
	if($j == 3) {
		echo "<script>alert("._("Unrecognized member ...").")</script>";
		echo '<meta http-equiv="refresh" content="0;URL=admin_login.php">';
		break;
	}
}
else {
	echo "<script>alert("._("Login error, please try again ...").")</script>";
	echo '<meta http-equiv="refresh" content="0;URL=admin_login.php">';
}

$identifiant->closeCursor();

?>