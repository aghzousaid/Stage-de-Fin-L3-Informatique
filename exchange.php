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
                                <li class="active"><a href="#"> <?php echo _("Exchange Programme"); ?> </a></li>
                            </ol>
                        </div>
                    </div>
                </div>

    				 <div class="section intro-edu">
                    <div class="container">
                        <div class="intro-edu-wrapper">
                            <div class="row">
                                <!--<div class="col-md-7" style="margin-bottom:20px;">-->
                                    <div class="intro-title"><b><?php echo _("EXCHANGE PROGRAMME"); ?></b></div>

			<br>

<p>
        <?php echo _("The international nature of "); ?><strong><?php echo _("SDMI’s"); ?></strong>  <?php echo _("mission prompted the development of a significant network of academic partnerships throughout the world and concluded exchange programme agreements with many prestigious"); ?> <a href="partners.html"><?php echo _("partners"); ?></a>.
        <?php echo _("The main aims of these exchange agreements are:"); ?></p> <br>
            <div class="col-md-5"><img src="assets/images/pics_pages/exchange_page.jpg" alt="" class="intro-image fadeInLeft animated wow"/></div>
        <ul>
        <li> <?php echo _("To provide"); ?> <strong><?php echo _("SDMI"); ?></strong> <?php echo _("“outgoing” students with the opportunity of attending a partner institution for one or two semesters and benefit from their academic resources while immersing into the local life and surroundings of that institution. Outgoing exchange students can earn up to some ECTS credits towards their study programmes."); ?></li><br/>
        <li> <?php echo _("To provide “incoming” students from our partner institutions with the opportunity to benefit from the Institute’s expertise and its unique setting in France. Incoming students can attend"); ?> <strong><?php echo _("SDMI"); ?></strong> <?php echo _("for one or two semesters and gain credits towards their study programmes at home."); ?></li>

        </ul>
        
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
include_once "include/footer.inc.php";
?>