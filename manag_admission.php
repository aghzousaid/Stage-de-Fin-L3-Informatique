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
                                <li><a href="../index.php"><?php echo _("Home"); ?></a></li>
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
                            		try{
												$bdd = new PDO('mysql:unix_socket=/opt/lampp/var/mysql/mysql.sock;mysql:host=localhost;dbname=first_connexion;charset=utf8', 'root', '');
											}
											catch(Exception $e) {
												die('Erreur : '.$e->getMessage());
											}
											$req= "SELECT * FROM membres";
											$identifiant = $bdd->query($req);
   										$i=0;
											while($donnees = $identifiant->fetch()) {	
												$id[$i] = $donnees['id'];
												$login[$i] = $donnees['email'];
												$sex[$i] = $donnees['sex'];
												$nom[$i] = $donnees['FirstName'];
												$prenom[$i] = $donnees['LastName'];
												$day[$i] = $donnees['day'];
												$month[$i] = $donnees['month'];
												$year[$i] = $donnees['year'];
												$country[$i] = $donnees['country'];
		
		
												echo 	"<div style=\"text-align:center;\"><br><br>"._("Login:").$login[$i];
												echo 	"<br>"._("Sex:").$sex[$i];
												echo 	"<br>"._("Last Name:").$nom[$i];
												echo 	"<br>"._("First Name:").$prenom[$i];
												echo 	"<br>"._("Day:").$day[$i];
												echo 	"<br>"._("Month:").$month[$i];
												echo 	"<br>"._("Year:").$year[$i];
												echo 	"<br>"._("Country:").$country[$i];
												echo "<br><a href=\"decision.php?action=accepter&id=".$id[$i]."\">"._("Accept")."</a>"; 
												echo "<br><a href=\"decision.php?action=refuser&id=".$id[$i]."\">"._("Refuse")."</a></div>";
												$i++;
											}

											$identifiant->closeCursor();
                            	?>
        							
									</div>
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