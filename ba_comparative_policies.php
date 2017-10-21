<?php
session_start();
include_once "include/header.inc.php";
?>
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top" style="background-image:url('assets/images/banner/banner12.jpg');">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions"><?php echo _("Undergraduate Programme"); ?></h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php"><?php echo _("Home"); ?></a></li>
                                <li><a href="#"><?php echo _("Study"); ?></a></li>
                                <li><a href="#"><?php echo _("Study Programme"); ?></a></li>
                                <li><a href="#"><?php echo _("International Relations"); ?></a></li>
                                <li class="active"><a href="#"><?php echo _("BA Comparative policies"); ?></a></li>
                            </ol>
                        </div>
                    </div>
                </div>

    				 <div class="section intro-edu">
                    <div class="container">
                        <div class="intro-edu-wrapper">
                            <div class="row">
                                <!--<div class="col-md-7" style="margin-bottom:20px;">-->
                                    <div class="intro-title"><b><?php echo _("BA COMPARATIVE POLICIES"); ?></b></div>
												<div class="group-button">
           										<a href="pdf/SDMI-ProgramBAInternationalRelations.pdf" download><button class="btn btn-green"><span><?php echo _("Download BA Form"); ?></span></button></a>
        										</div><br/>
        										<div class="col-md-5"><img src="assets/images/pics_pages/comp_policies_page.png" alt="" class="intro-image fadeInLeft animated wow"/></div>
												<p><?php echo _("BA Comparative policies: "); ?><br><br>
     												<ul>
        												<li><?php echo _("American policy"); ?></li>
         											<li><?php echo _("Africa’s policy"); ?></li>
         											<li><?php echo _("Asia’s policy"); ?></li>
         											<li><?php echo _("China’s policy"); ?></li>
         											<li><?php echo _("Europe’s policy"); ?></li>
         											<li><?php echo _("India’s policy"); ?></li>
         											<li><?php echo _("Japan’s policy"); ?></li>
         											<li><?php echo _("Option: Middle East’s policy"); ?></li>
     												</ul>
      	 	 								</p>
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