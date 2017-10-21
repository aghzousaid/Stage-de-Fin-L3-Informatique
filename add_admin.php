<?php
session_start();
include_once "include/header.inc.php";
?>

<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions">Add admin</h2>
                            <ol class="breadcrumb">
                                <li><a href="../index.php">Home</a></li>
                                <li><a href="#">Admin area</a></li>
                                <li class="active"><a href="#">Add admin</a></li>
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
                            	<div class="intro-title"><b>ADDING AN ADMIN</b></div>
                            	
                            	<?php
										if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['lastname']) && isset($_POST['firstname'])) {
    										$login = $_POST['email'];
    										$password = $_POST['password'];
    										$lastname = $_POST['lastname'];
    										$firstname = $_POST['firstname'];
    										
											try{
 												mysql_connect("localhost", "root", "");
												mysql_select_db("admin");
											}
											catch(Exception $e) {
												die('Erreur : '.$e->getMessage());
											}

    										$req = "INSERT INTO connect VALUES ('', '$login', '$password', '$lastname', '$firstname')"; 

    										mysql_query($req) or die(mysql_error());
    										mysql_close();
    										echo '<p>New admin add :<br />' .$lastname. ':' .$firstname. '</p>';
										}

										else {
										?>
										<div id="wrapper-content"><!-- PAGE WRAPPER-->
    										<div id="page-wrapper"><!-- MAIN CONTENT-->
        										<div class="main-content"><!-- CONTENT-->
            									<div class="content">
                									<div class="page-login rlp">
                    									<div class="container">
                        								<div class="login-wrapper rlp-wrapper">
                            								<div class="login-table rlp-table"><a href="../index.php"><img src="../assets/images/sdmi_logo2.png" alt="" class="login"/></a>

                                								<div class="login-title rlp-title">Enter infos to add new admin !</div>
                                								<div class="login-form bg-w-form rlp-form">
                                    							<div class="row">
                                  									<form method="post" action="add_admin.php">
                                        								<div class="col-md-12"><label for="email" class="control-label form-label">email <span class="highlight">*</span></label><input id="email" name="email "type="email" placeholder="" class="form-control form-input"/><!--p.help-block Warning !--></div>
                                        								<div class="col-md-12"><label for="password" class="control-label form-label">password <span class="highlight">*</span></label><input id="password" name="password" type="password" placeholder="" class="form-control form-input"/><!-- p.help-block Warning !--></div>
                                    									<div class="col-md-12"><label for="lastname" class="control-label form-label">lastname <span class="highlight">*</span></label><input id="lastname" name="lastname "type="text" placeholder="" class="form-control form-input"/><!--p.help-block Warning !--></div>
                                    									<div class="col-md-12"><label for="firstname" class="control-label form-label">firstname <span class="highlight">*</span></label><input id="firstname" name="firstname "type="text" placeholder="" class="form-control form-input"/><!--p.help-block Warning !--></div>
                                    								
                                    							</div>
                                    					
                                									<div class="login-submit">
                                    								<button type="submit" name="envoi" class="btn btn-login btn-green"><span>add</span></button>
                                									</div>
                                								</form>
                            									</div>
                        									</div>
                    										</div>
                										</div>
            										</div>
        											</div>
    											</div>
										<?php
										}
										?>
										
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