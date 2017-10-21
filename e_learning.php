<?php
session_start();
include_once "include/header.inc.php";
?>
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top" style="background-image:url('assets/images/banner/banner8.jpg');">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions"><?php echo _("Study Programme"); ?></h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php"><?php echo _("Home"); ?></a></li>
                                <li><a href="#"><?php echo _("Study"); ?></a></li>
                                <li class="active"><a href="#"> <?php echo _("E-learning"); ?> </a></li>
                            </ol>
                        </div>
                    </div>
                </div>

    				 <div class="section intro-edu">
                    <div class="container">
                        <div class="intro-edu-wrapper">
                            <div class="row">
                                <!--<div class="col-md-7" style="margin-bottom:20px;">-->
                                    <div class="intro-title"><b><?php echo _("E-LEARNING"); ?></b></div>

			<br>

<p>
        <?php echo _("E-learning is open to people, places, methods and ideas."); ?></p> <br>

        <p><?php echo _("It promotes educational opportunity and social justice by providing high-quality university education to all who wish to realise their ambitions and fulfil their potential."); ?></p> <br>

        <p><?php echo _("Through academic research, pedagogic innovation and collaborative partnership it seeks to be a world leader in the design, content and delivery of supported open and distance learning."); ?></p> <br>

        <p><?php echo _("Most qualifications of the Institue are modular in structure - the appropriate number of courses at the appropriate levels can be combined together to obtain an academic qualification (a degree, certificate or diploma)."); ?></p> <br>
 <br><br>
        
            <div class="col-md-5"><img src="assets/images/pics_pages/elearning_page.jpg" alt="" class="intro-image fadeInLeft animated wow"/></div>

     <ul>
     <li> <?php echo _("Business and management"); ?></li>
     <li> <?php echo _("Environment"); ?></li>
     <li> <?php echo _("Health and social care/Health studies"); ?></li>
     <li> <?php echo _("Humanities: arts, languages, history"); ?></li>
     <li> <?php echo _("Information technology and computing"); ?></li>
     <li> <?php echo _("Law and criminology"); ?></li>
     <li> <?php echo _("Mathematics and statistics"); ?></li>
     <li> <?php echo _("Psychology, philosophy, politics, economics"); ?></li>
     <li> <?php echo _("Social sciences"); ?></li>
     <li> <?php echo _("Continuing Professional Development"); ?></li>
     </ul>

        
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