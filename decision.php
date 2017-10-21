<?php
session_start();
include_once "include/header.inc.php";

if((!isset($_SESSION['email'])) || (empty($_SESSION['email']))) {
	echo "<script>alert("._("You are not authorized ...")."</script>";
	echo '<meta http-equiv="refresh" content="0;URL=admin_login.php">';
}
else if (isset($_SESSION['email']) && isset($_SESSION['password']) && isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
?>

<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top" style="background-image:url('assets/images/banner/banner16.jpg');">
                    <div class="container">
                        <div class="page-title-wrapper sty20"><!--.page-title-content--><h2 class="captions"><?php echo _("Admin Area"); ?></h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php"><?php echo _("Home"); ?></a></li>
                                <li class="active"><a href="#"><?php echo _("Admin area"); ?></a></li>
                            </ol>
                        </div>
                    </div>
                </div>

    				 <div class="section intro-edu">
                    <div class="container">
                        <div class="intro-edu-wrapper">
                            <div class="row">
										<?php echo " <p>"._("Welcome")." ".$_SESSION['nom']." ".$_SESSION['prenom']."</p>";?>
      			 					<p style="text-align:right;"> <a href="logout.php"> <?php echo _("DECONNECTION"); ?></a></p>
										<div class="intro-title" style="text-align:center;"><b><?php echo _("MANAGE ADMISSION"); ?></b></div>
										
										<?php
											if(isset($_GET['action']) && isset($_GET['id'])){
												$action = $_GET['action'];
												if($action == "accepter"){
													$id = $_GET['id'];
													try{			
														$bdd = new PDO('mysql:unix_socket=/opt/lampp/var/mysql/mysql.sock;mysql:host=localhost;dbname=first_connexion;charset=utf8', 'root', '');
													}
													catch(Exception $e) {
	 													die('Erreur : '.$e->getMessage());
													}
													$req = "SELECT * FROM membres WHERE id=$id";
													$identifiant = $bdd->query($req);
	
													$connexion = $identifiant->fetch();
													$LastName = $connexion['LastName'];
													$FirstName = $connexion['FirstName'];
													$sex = $connexion['sex'];
													$day = $connexion['day'];
													$month = $connexion['month'];
													$year = $connexion['year'];
													$email = $connexion['email'];
													$passe = $connexion['password'];
													$country = $connexion['country'];
		 
													try{
 														mysql_connect("localhost", "root", "");
														mysql_select_db("first_connexion");
													}
													catch(Exception $e) {
														die('Erreur : '.$e->getMessage());
													}
													$req = "INSERT INTO membre_valide  VALUES ('$id', '$LastName', '$FirstName', '$sex', '$day', '$month', '$year', '$email', '$passe', '$country')";
													mysql_query($req) or die(mysql_error());
		
													mysql_query("DELETE FROM membres WHERE id=$id");
													echo "<h1>Add successfully</h1>";
													include('email.php');
													mysql_close();	
	
												}
												elseif($action == "refuser"){
													$id = $_GET['id'];
													try{
 														mysql_connect("localhost", "root", "");
														mysql_select_db("first_connexion");
													}
													catch(Exception $e) {
														die('Erreur : '.$e->getMessage());
													}
													$req="DELETE FROM membres WHERE id=$id";
													echo "<h1>Delete successfully</h1>";
													if(mysql_query($req));
													else {  
		 												echo "<br>"._("Deletion problem");
													}
												}
											}	
										?>
										
								</div>
						 </div>
					 </div>
				</div>
			</div>	
			<br/> 
<?php
	}
	else {
		echo "<script>alert("._("Login error ...").")</script>";
		echo '<meta http-equiv="refresh" content="0;URL=index.php">';
	}
include_once "include/footer.inc.php";
?>