<?php
if(isset($_POST['envoi'])) {
	
if(!empty($_POST['email']) && !empty($_POST['password'])) {
		

	try{
 			//mysql_connect("localhost", "root", "");
			//mysql_select_db("first_connexion");
			
			$bdd = new PDO('mysql:unix_socket=/opt/lampp/var/mysql/mysql.sock;mysql:host=localhost;dbname=admin;charset=utf8', 'root', '');
		}
		catch(Exception $e) {
		die('Erreur : '.$e->getMessage());
		}
	$req= "SELECT * FROM validation";
	$identifiant = $bdd->query($req);
   $i=0;
	while($donnees = $identifiant->fetch()) {
		$login[$i] = $donnees['email'];
		$password[$i] = $donnees['password'];
		$nom[$i] = $donnees['FirstName'];
		$prenom[$i] = $donnees['LastName'];
		$i++;
	}
 for($j=0;$j<=$i;$j++) {
		if($login[$j] == $_POST['email'] && $password[$j] == $_POST['password']) {
			
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['password'] = $_POST['password'];
			$_SESSION['nom'] = $nom[$j];
			$_SESSION['prenom'] = $prenom[$j];
	
			echo " <p>"._("Welcome")." ".$_SESSION['nom']." ".$_SESSION['prenom'].","._("You are in your personal space which allows you to consult your applications")." </p>";
		   ?>
		   <br>
		   <br> 
			<ul>
            <li><a href="admission_under.php"><?php echo _("Master Programme"); ?></a></li>
            <li><a href="admission_grad.php"><?php echo _("Bachelor Programme"); ?></a></li>
         </ul>
			<?php
		   break;
		}
	}
	if($j >$i) {
		echo "<script>alert("._("Unrecognized member ...").")</script>";
		echo '<meta http-equiv="refresh" content="0;URL=login.php">';
		break;
	}
	

$identifiant->closeCursor();
 }
else {
	echo "<script>alert("._("Login error, please try again ...").")</script>";
	echo '<meta http-equiv="refresh" content="0;URL=index.php">';
}
			

  	
		
}

else{
  if(empty($_SESSION['nom']) && empty($_SESSION['prenom'])) {
  		echo '<meta http-equiv="refresh" content="0;URL=login.php">';
  }
  
  else {
	echo " <p>"._("Welcome")." ".$_SESSION['nom']." ".$_SESSION['prenom'].","._("You are in your personal space which allows you to consult your applications")." </p>";
		   ?>
		   <br>
		   <br> 
			<ul>
            <li><a href="admission_under.php"><?php echo _("Master Programme"); ?></a></li>
            <li><a href="admission_grad.php"><?php echo _("Bachelor Programme"); ?></a></li>
         </ul>
  <?php
  }
}
?>