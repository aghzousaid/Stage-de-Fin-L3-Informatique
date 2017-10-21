<?php
session_start();
include_once "include/header.inc.php";
?>
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top" style="background-image:url('assets/images/banner/banner18.jpg');">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions"><?php echo _("About Us"); ?></h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php"><?php echo _("Home"); ?></a></li>
                                <li><a href="#"><?php echo _("About us"); ?></a></li>
                                <li><a href="#"><?php echo _("European International Project"); ?></a></li>
                                <li class="active"><a href="#"><?php echo _("European and International Project"); ?></a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                 <div class="section intro-edu">
                    <div class="container">
                        <div class="intro-edu-wrapper">
                            <div class="row">
                            	<div class="intro-title"><b><?php echo _("EUROPEAN AND INTERNATIONAL PROJECT"); ?></b></div>
                            	<div class="col-md-5"><img src="assets/images/pics_pages/european_project.jpg" alt="" class="intro-image fadeInLeft animated wow"/></div>
										<p><strong><?php echo _("SDMI"); ?></strong> <?php echo _("has been participating in the European Community higher education programme Erasmus since 2015. The programme has opened a great opportunity to widen transnational co-operation between higher education institutions by promoting mobility for students and teaching staff, and improving transparency and academic recognition of studies and qualifications throughout the Europe."); ?> </p>
									 </div>
								</div>
						 </div>
					 </div>
				</div>
			</div>
		</div>

<?php
include_once "include/footer.inc.php";
?>