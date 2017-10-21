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
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions"><?php echo _("Undergraduate Programme"); ?></h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php"><?php echo _("Home"); ?></a></li>
                                <li><a href="#"><?php echo _("Study"); ?></a></li>
                                <li><a href="#"><?php echo _("Study Programme"); ?></a></li>
                                <li><a href="#"><?php echo _("Tourism &amp; Leisure"); ?></a></li>
                                <li class="active"><a href="#"><?php echo _("BA Tourism and Hospitality Management"); ?></a></li>
                            </ol>
                        </div>
                    </div>
                </div>

    				 <div class="section intro-edu">
                    <div class="container">
                        <div class="intro-edu-wrapper">
                            <div class="row">
                                <!--<div class="col-md-7" style="margin-bottom:20px;">-->
                                    <div class="intro-title"><b><?php echo _("BA TOURISM AND HOSPITALITY MANAGEMENT"); ?></b></div>
												<div class="group-button">
           										<a href="pdf/SDMI-ProgramBATourism&Hospitality.pdf" download><button class="btn btn-green"><span><?php echo _("Download BA Form"); ?></span></button></a>
        										</div><br/>

			<br>
                <div class="col-md-5"><img src="assets/images/pics_pages/hospitality.jpg" alt="" class="intro-image fadeInLeft animated wow"/></div>
        <p>

        <?php echo _("The Bachelor of Arts in Tourism and Hospitality Management is an interdisciplinary degree designed to prepare students with the skills and knowledge to serve as leaders in the tourism and hospitality industry."); ?>
        </p> <br>

       <p><?php echo _("The course provides a strong element of work experience across each year of study to develop skills and experience.  Students can choose to study specialised themes in either tourism or hospitality or both."); ?> </p> <br>


       <p><?php echo _("Student can study specialised themes in either tourism or hospitality or study both. This is a highly practical course where you learn through direct experience working in the sector. You can study full time or part time to suit your personal circumstances"); ?></p>


        </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
include_once "include/footer.inc.php";
?>