<?php
session_start();
include_once "include/header.inc.php";
?>

<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top" style="background-image:url('assets/images/banner/banner16.jpg');">
                    <div class="container">
                        <div class="page-title-wrapper sty20"><!--.page-title-content--><h2 class="captions">Admin Area</h2>
                            <ol class="breadcrumb">
                                <li><a href="../index.php">Home</a></li>
                                <li class="active"><a href="#">Admin area</a></li>
                            </ol>
                        </div>
                    </div>
                </div>

    				 <div class="section intro-edu">
                    <div class="container">
                        <div class="intro-edu-wrapper">
                            <div class="row">
                              <?php echo ' <p>Bienvenue '.$_SESSION['nom'].' '.$_SESSION['prenom'].'</p>';?>
                              <p style="text-align:right;"> <a href="logout.php"> DECONNEXION</a></p>
                            	<div class="intro-title" style="text-align:center;"><b>ADMIN</b></div>
                            	<div class="group-button">
           								<a href="add_admin.php"><button class="btn btn-green"><span>Add a new admin</span></button></a>
        								</div><br/>
        								<div class="group-button">
           								<a href="manag_admission.php"><button class="btn btn-green"><span>Manage Admissions</span></button></a>
        								</div><br/>
        								<div class="group-button">
           								<a href="#"><button class="btn btn-green"><span>Add an event</span></button></a>
        								</div><br/>
        							
									</div>
								</div>
						 </div>
					 </div>
				</div>
			</div>	
			<br/> 
<?php
include_once "include/footer.inc.php";
?>