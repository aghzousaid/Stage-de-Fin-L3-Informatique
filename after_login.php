<?php
session_start();
include_once "include/header.inc.php";

if((!isset($_SESSION['email'])) || (empty($_SESSION['email']))) {
	echo "<script>alert("._("You are not authorized ...")."</script>";
	echo '<meta http-equiv="refresh" content="0;URL=login.php">';
}
else if (isset($_SESSION['email']) && isset($_SESSION['password']) && isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
?>

<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions"><?php echo _("Admissions"); ?></h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php"><?php echo _("Home"); ?></a></li>
                                <li><a href="#"><?php echo _("Admission"); ?></a></li>
                                <li class="active"><a href="#"><?php echo _("Admission Procedure"); ?></a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                
                <div class="section intro-edu">
                    <div class="container">
                        <div class="intro-edu-wrapper">
                            <div class="row">
                                 <p style="text-align:right;"> <a href="logout.php"> <?php echo _("DECONNECTION"); ?></a></p>
                                    <div class="intro-title"><b><?php echo _("ADMISSION PROCEDURE"); ?></b></div>
                                    
                                    <?php
                                    	include "connexion.php";
                                    ?>
                                    
                            
									</div>
								</div>
						  </div>
					</div>
				</div>
			</div>
		</div>
<?php
	}
	else {
		echo "<script>alert("._("Login error ...").")</script>";
		echo '<meta http-equiv="refresh" content="0;URL=index.php">';
	}
	?>

<?php
	include_once "include/footer.inc.php";
?>