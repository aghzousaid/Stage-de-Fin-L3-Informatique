<?php
session_start();
include_once "include/header.inc.php";
?>

<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="section background-opacity page-title set-height-top" style="background-image:url('assets/images/banner/banner7.jpg');">
                    <div class="container">
                        <div class="page-title-wrapper"><!--.page-title-content--><h2 class="captions"><?php echo _("Contact Us"); ?></h2>
                            <ol class="breadcrumb">
                                <li><a href="index.php"><?php echo _("Home"); ?></a></li>
                                <li class="active"><a href="#"><?php echo _("Contact"); ?></a></li>
                            </ol>
                        </div>
                    </div>
                </div>
						
					 <div class="section section-padding contact-main">
                    <div class="container">
                        <div class="contact-main-wrapper">
                            <div class="row contact-method">
                                <div class="col-md-4">
                                    <div class="method-item"><i class="fa fa-map-marker"></i>

                                        <p class="sub"><?php echo _("COME TO"); ?></p>

                                        <div class="detail"><p><?php echo _("73 rue Léon Bourgeois"); ?></p>

                                            <p><?php echo _("91120 Palaiseau - FRANCE"); ?></p></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="method-item"><i class="fa fa-phone"></i>

                                        <p class="sub"><?php echo _("CALL TO"); ?></p>

                                        <div class="detail">
                                        	<p>+33 -615 -137 -504</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="method-item"><i class="fa fa-envelope"></i>

                                        <p class="sub"><?php echo _("CONNECT TO"); ?></p>

                                        <div class="detail"><p><?php echo _("info@sdmi-edu.fr"); ?></p>

                                            <p><?php echo _("www.sdmi-edu.fr"); ?></p></div>
                                    </div>
                                </div>
                            </div>
                            <form class="bg-w-form contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label"><?php echo _("NAME"); ?> <span class="highlight">*</span></label><input type="text" placeholder="" class="form-control form-input"/><!--label.control-label.form-label.warning-label(for="") Warning for the above !--></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label"><?php echo _("EMAIL"); ?> <span class="highlight">*</span></label><input type="text" placeholder="" class="form-control form-input"/><!--label.control-label.form-label.warning-label(for="")--></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="control-label form-label"><?php echo _("SUBJECT"); ?></label><input type="text" placeholder="" class="form-control form-input"/><!--label.control-label.form-label.warning-label(for="", hidden)--></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-question form-group"><label class="control-label form-label"><?php echo _("HOW CAN WE HELP?"); ?> <span class="highlight">*</span></label><textarea class="form-control form-input"></textarea></div>
                                    </div>
                                </div>
                                <div class="contact-submit">
                                    <button type="submit" class="btn btn-contact btn-green"><span><?php echo _("SUBMIT CONTACT"); ?></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="map" class="section contact-map">    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2634.0085762413687!2d2.171155015176028!3d48.68620067927105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5d5e289c257db%3A0x2e6a9629da0758a7!2s1+Rue+de+l&#39;Aube%2C+91940+Les+Ulis!5e0!3m2!1sfr!2sfr!4v1457119195659" width="1838" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
            </div>
        </div>
    </div>
<?php
include_once "include/footer.inc.php";
?>