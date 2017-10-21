<?php
if(isset($_POST['envoi'])) {

	 echo"<p><a style='background-color:#DFF2FF;' href='logout.php'> DÉCONNEXION</a></p>";
	
if(!empty($_POST['login']) && !empty($_POST['password'])) {
		

	try{
 			//mysql_connect("localhost", "root", "");
			//mysql_select_db("first_connexion");
			
			$bdd = new PDO('mysql:unix_socket=/opt/lampp/var/mysql/mysql.sock;mysql:host=localhost;dbname=first_connexion;charset=utf8', 'root', '');
		}
		catch(Exception $e) {
		die('Erreur : '.$e->getMessage());
		}
	$req= "SELECT * FROM membres";
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
		if($login[$j] == $_POST['login'] && $password[$j] == $_POST['password']) {
			
			$_SESSION['login'] = $_POST['login'];
			$_SESSION['password'] = $_POST['password'];
			$_SESSION['nom'] = $nom[$j];
			$_SESSION['prenom'] = $prenom[$j];
	
			echo ' <p>Bienvenue '.$_SESSION['nom'].' '.$_SESSION['prenom'].', vous etes dans votre espace personnel qui vous permet de consulter vous candidatures </p>';
		   ?>
		   <br>
		   <br> 
			<ul>
            <li><a href="admission_under.html">Master Programme</a></li>
            <li><a href="admission_grad.html">Bachelor Programme</a></li>
         </ul>
			<?php
		   break;
		}
	}
	if($j >$i) {
		echo "<script>alert(\"Membre non reconnu ...\")</script>";
		echo '<meta http-equiv="refresh" content="0;URL=login.php">';
		break;
	}
	

$identifiant->closeCursor();
 }
else {
	echo "<script>alert(\"Vauillez bien entrer votre login et mot de passe!!!! ...\")</script>";
	echo '<meta http-equiv="refresh" content="0;URL=index.php">';
}
			

  	
		
}

else{
  if(empty($_SESSION['nom']) && empty($_SESSION['prenom'])) {
  		echo '<meta http-equiv="refresh" content="0;URL=login.php">';
  }
  
  else {
	echo ' <p>Bienvenue '.$_SESSION['nom'].' '.$_SESSION['prenom'].', vous etes dans votre espace personnel qui vous permet de consulter vous candidatures </p>';
		   ?>
		   <br>
		   <br> 
			<ul>
            <li><a href="admission_under.html">Master Programme</a></li>
            <li><a href="admission_grad.html">Bachelor Programme</a></li>
         </ul>
  <?php
  }
}
?>