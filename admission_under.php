<?php
session_start();
include_once "include/header.inc.php";

if((!isset($_SESSION['email'])) || (empty($_SESSION['email']))) {
	echo "<script>alert("._("You are not authorized ...").")</script>";
	echo '<meta http-equiv="refresh" content="0;URL=login.php">';
}
else if (isset($_SESSION['email']) && isset($_SESSION['password']) && isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
?>
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top" style="background-image:url('assets/images/banner/banner8.jpg');">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions"><?php echo _("Graduate Programme"); ?></h2>
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
                                    <div class="intro-title"><b><?php echo _("UNDERGRADUATE PROGRAMME"); ?></b></div>
												<div class="group-button">
           										<a href="pdf/#" download><button class="btn btn-green"><span><?php echo _("Download BA Form"); ?></span></button></a>
        										</div><br/>


        <p>

        <strong><?php echo _("Your application file to be returned before two months before the beginning of the programme"); ?> </strong></p>

     
         <br><br>
 
        
        <form method="post" action="reception.php" enctype="multipart/form-data">
            <label for="St_Pu">&ndash; <?php echo _("A Statement of Purpose"); ?></label><br>
            <input type="file" name="St_Pu" id="St_Pu"/><br>
            <label for="cv">&ndash; <?php echo _("a CV"); ?></label><br>
            <input type="file" name="cv" id="cv"/><br>
            <label for="transcripts">&ndash; <?php echo _("The transcripts from your university of origin"); ?></label><br>
           	<input type="file" name="transcripts" /><br>
            <label for="let_reco">&ndash; <?php echo _("Two letters of recommendation written by two of your professors from your university of origin"); ?></label><br>
           	<input type="file" name="let_reco" /><br>
            <label for="diplomas">&ndash; <?php echo _("The photocopies of your diplomas."); ?></label><br>
           	<input type="file" name="diplomas" /><br><br/><br/>
           	
           	<input type="submit" name="Envoyer" value="Envoyer" />
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
	else {
		echo "<script>alert("._("Login error ...").")</script>";
		echo '<meta http-equiv="refresh" content="0;URL=index.php">';
	}
	?>
<?php
include_once "include/footer.inc.php";
?>