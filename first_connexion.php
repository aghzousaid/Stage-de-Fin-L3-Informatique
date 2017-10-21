<?php
session_start();
include_once "include/header.inc.php";
?>

<?php

$LastName="";$FirstName="";$sex="";$day=""; $month=""; $year=""; $email=""; $password=""; $confirm_password=""; $country="";
                
if(isset($_POST['envoi'])) {
	
                        // Traitement de l'envoi de l'événement
                        $id=time();
                        $LastName = htmlentities(addslashes($_POST['LastName']));
                        $FirstName = nl2br(htmlentities(addslashes($_POST['FirstName'])));
                        $sex = htmlentities($_POST['sex']);
                        $day = htmlentities($_POST['day']);
                        $month = htmlentities($_POST['month']);
                        $year = htmlentities($_POST['year']);
                        $email = htmlentities($_POST['email']);
                        $password=htmlentities($_POST['password']);
                        $confirm_password=htmlentities($_POST['confirm_password']);
                        $country=htmlentities($_POST['country']);
                        
	if(!empty($_POST['LastName']) && !empty($_POST['FirstName']) && !empty($_POST['sex']) && !empty($_POST['day']) && !empty($_POST['month']) &&
		!empty($_POST['year'])  && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password']) && !empty($_POST['country'])) {
		try{
 			mysql_connect("localhost", "root", "");
			mysql_select_db("first_connexion");
		}
		catch(Exception $e) {
		die('Erreur : '.$e->getMessage());
		}

    $req = "INSERT INTO membres VALUES ('$id', '$LastName', '$FirstName', '$sex', '$day', '$month', 
           '$year', '$email', '$password', '$confirm_password', '$country')";
    mysql_query($req) or die(mysql_error());
    mysql_close();
    
    echo"<script>alert("._("Your information has been taken into account, you will receive a confirmation email").")</script>";
    echo '<meta http-equiv="refresh" content="0;URL=index.php">';
    
    
	}
	
	else {
		echo "<script>alert("._("Login error, please enter your information").")</script>";
		//echo '<meta http-equiv="refresh" content="0;URL=register.php">';
	}
		
}	

?>

<?php
	include_once "include/footer.inc.php";
?>