<?php
require "lib/gettext/localization.php";
?>

<!DOCTYPE html>
<html lang="en">
<head><title><?php echo _("SDMI | Sustainable Development Management Institute"); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="assets/images/sdmi_logo_favicon.png"/>
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- LIBRARY FONT-->
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-svg/css/simple-line-icons.css">
    <link type="text/css" rel="stylesheet" href="css/simpleline-icons/fonts/simple-line-icons.css" media="screen">
    <!-- LIBRARY CSS-->
    <link type="text/css" rel="stylesheet" href="assets/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap-3.3.5/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/selectbox/css/jquery.selectbox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/media-element/build/mediaelementplayer.min.css">
    <!-- STYLE CSS    -->
    <link type="text/css" rel="stylesheet" href="assets/css/color-1.css" id="color-skins">
    
    <!--link(type="text/css", rel='stylesheet', href='#', id="color-skins")-->
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
    <!--script.--><!--    if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {--><!--        $('#color-skins').attr('href', 'assets/css/' + Cookies.get('color-skin') + '.css');--><!--    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {--><!--        $('#color-skins').attr('href', 'assets/css/color-1.css');--><!--    }-->
	<style type="text/css">
		p {
			font-size: 20px;
			text-align:justify;
		}
		li {
			font-size: 20px;
			text-align:justify;
			}
	</style>
</head>
<body><!-- HEADER-->
<header>
    <div class="header-topbar">
        <div class="container">
            <div class="topbar-left pull-left">
                <div class="email"><a href="#"><i class="topbar-icon fa fa-envelope-o"></i><span>info@sdmi-edu.fr</span></a></div>
                <div class="hotline"><a href="#"><i class="topbar-icon fa fa-phone"></i><span>+336 15 13 75 04</span></a></div>
            </div>
            <div class="topbar-right pull-right">
                <div class="socials">
                	<a href="https://www.facebook.com/people/Sdmi-Sdmi/100009346509545" class="facebook"><i class="fa fa-facebook"></i></a>
                	<a href="https://plus.google.com/u/0/" class="google"><i class="fa fa-google-plus"></i></a>
						<a href="https://www.linkedin.com/company/sustainable-development-management-institute"  target=_blank><i class="fa fa-linkedin"></i></a>
					 </div>
                <div class="group-sign-in">
                	<a href="?lang=ar"><img border="0" src="assets/images/flags/flag_arabic.png" alt="fr" title="Arabic" width="16" height="16"></a>&nbsp;&nbsp;&nbsp;&nbsp;
        				<a href="?lang=tr"><img border="0" src="assets/images/flags/flag_turky.png" alt="fr" title="Turc" width="16" height="16"></a>&nbsp;&nbsp;&nbsp;&nbsp;
        				<a href="?lang=ru"><img border="0" src="assets/images/flags/flag_russia.png" alt="fr" title="Russia" width="16" height="16"></a>&nbsp;&nbsp;&nbsp;&nbsp;
        				<a href="?lang=zh"><img border="0" src="assets/images/flags/flag_china.png" alt="fr" title="Chinese" width="16" height="16"></a>&nbsp;&nbsp;&nbsp;&nbsp;
        				<a href="?lang=pt"><img border="0" src="assets/images/flags/flag_portugal.png" alt="fr" title="Portuguese" width="16" height="16"></a>&nbsp;&nbsp;&nbsp;&nbsp;
        				<a href="?lang=es_ES"><img border="0" src="assets/images/flags/flag_spain.png" alt="uk" title="Spanish" width="16" height="16"></a>&nbsp;&nbsp;&nbsp;&nbsp;
        				<a href="?lang=nl"><img border="0" src="assets/images/flags/flag_netherlands.png" alt="fr" title="Deutch" width="16" height="16"></a>&nbsp;&nbsp;&nbsp;&nbsp;
        				<a href="?lang=en_US"><img border="0" src="assets/images/flags/flag_uk.png" alt="uk" title="English" width="16" height="16"></a>&nbsp;&nbsp;&nbsp;&nbsp;
        				<a href="?lang=fr_FR"><img border="0" src="assets/images/flags/flag_france.png" alt="fr" title="French" width="16" height="16"></a>   				
                </div>
                <div class="group-sign-in">
                	<i class="fa fa-pencil-square-o"></i><a href="login.php" class="login">&nbsp;login</a>&nbsp;&nbsp;
                	<i class="fa fa-lock"></i><a href="register.php" class="register">&nbsp;register</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                	<i class="topbar-icon fa fa-user"></i><a href="admin_login.php">&nbsp;admin</a>

                </div>
            </div>
        </div>
    </div>
    <div class="header-main homepage-01">
        <div class="container" style="width:70%;">
            <div class="header-main-wrapper">
                <div class="navbar-heade" style="float:left;">
               					<div class="logo pull-left"><a href="index.php" class="header-logo"><img src="assets/images/sdmi_logo.png" alt=""/></a></div>
               					<button type="button" data-toggle="collapse" data-target=".navigation" class="navbar-toggle edugate-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            					</div>
                
                <nav class="navigation collapse navbar-collapse pull-right" style="font-size:40px;">                   
                    <ul class="nav-links nav navbar-nav">
                    		
                    			 
            				
                        <li class="dropdown active"><a href="javascript:void(0)" class="main-menu"><?php echo _("About Us"); ?><span class="fa fa-angle-down icons-dropdown"></span></a>
                            <ul class="dropdown-menu edugate-dropdown-menu-1">
                                <li><a href="presentation.php" class="link-page"><?php echo _("Presentation"); ?></a></li>
                                <li><a href="message_director.php" class="link-page"><?php echo _("Message from the Director"); ?></a></li>
                                <li><a href="discover_institute.php" class="link-page"><?php echo _("Discover the institute"); ?></a></li>
                                <li><a href="our_community.php" class="link-page"><?php echo _("Our Community"); ?></a></li>
                                <li><a href="support_institute.php" class="link-page"><?php echo _("Support the Institute"); ?></a></li>
                                <li><a href="partners.php" class="link-page"><?php echo _("Partners and Associations"); ?></a></li>                           		
                            	  <li class="dropdown"><a href="javascript:void(0)" class="link-page"><?php echo _("European International Project"); ?></a>
                    				  		<ul class="dropdown-menu edugate-dropdown-menu-2" style="margin-left:275px;">
                        					<li><a href="european_project.php" class="link-page"><?php echo _("European Project"); ?></a></li>
                        					<li><a href="european_ivt.php" class="link-page"><?php echo _("EURspace: European IVT Recognition Gateway"); ?></a></li>
                    						</ul>
                    				  </li>
                    				  <li><a href="mandala.php" class="link-page"><?php echo _("MANDALA: Accelerator of Knowledge"); ?></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)" class="main-menu"><?php echo _("Admissions"); ?><span class="fa fa-angle-down icons-dropdown"></span></a>
                            <ul class="dropdown-menu edugate-dropdown-menu-1">
                                <li class="dropdown"><a href="after_login.php" class="link-page"><?php echo _("Admission Procedure"); ?></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)" class="main-menu"><?php echo _("Study"); ?><span class="fa fa-angle-down icons-dropdown"></span></a>
                            <ul class="dropdown-menu edugate-dropdown-menu-1">
                            	  <li class="dropdown"><a href="javascript:void(0)" class="link-page"><?php echo _("Study Programme"); ?></a>
                                		<ul class="dropdown-menu edugate-dropdown-menu-2" style="margin-left:270px;">
                                			<li class="dropdown"><a href="javascript:void(0)" class="link-page"><?php echo _("International Relations"); ?></a>
                                				<ul class="dropdown-menu edugate-dropdown-menu-2" style="margin-left:240px;">
                        							<li><a href="ba_inter_relations.php" class="link-page"><?php echo _("BA International Relations"); ?></a></li>
                        							<li><a href="ba_comparative_policies.php" class="link-page"><?php echo _("BA Comparative policies"); ?></a></li>
                        							<li><a href="#" class="link-page"><?php echo _("BA War Studies"); ?></a></li>
                        							<li><a href="#" class="link-page"><?php echo _("BA Diplomacy International Relations"); ?></a></li>
                        							<li><a href="ma_inter_relations.php" class="link-page"><?php echo _("MA International Relations"); ?></a></li>
                    								</ul>
                    				  			</li>
                    				  			<li class="dropdown"><a href="javascript:void(0)" class="link-page"><?php echo _("Tourism &amp; Leisure"); ?></a>
                                				<ul class="dropdown-menu edugate-dropdown-menu-2" style="margin-left:240px;">
                        							<li><a href="ba_tourism.php" class="link-page"><?php echo _("BA Tourism, Culture &amp; Leisure"); ?></a></li>
                        							<li><a href="ba_hospitality.php" class="link-page"><?php echo _("BA Tourism &amp; Hospitality Management"); ?></a></li>
                        							<li><a href="ma_tourism.php" class="link-page"><?php echo _("MA Tourism &amp; Leisure Management"); ?></a></li>
                        							<li><a href="ma_hospitality.php" class="link-page"><?php echo _("MA Hospitality Management"); ?></a></li>
                    								</ul>
                    				  			</li>
                    				  			<li class="dropdown"><a href="javascript:void(0)" class="link-page"><?php echo _("Business"); ?></a>
                                				<ul class="dropdown-menu edugate-dropdown-menu-2" style="margin-left:240px;">
                        							<li><a href="bba_programme.php" class="link-page"><?php echo _("BBA Programme"); ?></a></li>
                        							<li><a href="mba_programme.php" class="link-page"><?php echo _("MBA Programme"); ?></a></li>
                    								</ul>
                    				  			</li>
                    				  			<li class="dropdown"><a href="javascript:void(0)" class="link-page"><?php echo _("Operational Management"); ?></a>
                                				<ul class="dropdown-menu edugate-dropdown-menu-2" style="margin-left:240px;">
                        							<li><a href="msc_wrp.php" class="link-page"><?php echo _("MSc Waste &amp; Recycling Management"); ?></a></li>
                        							<li><a href="msc_ohhsem.php" class="link-page"><?php echo _("MSc Occupational Hygiene, Health, Safety &amp; Environmental Management"); ?></a></li>
                        							<li><a href="msc_tlm.php" class="link-page"><?php echo _("MSc Transports &amp; Logistics"); ?></a></li>
                        							<li><a href="msc_lscm.php" class="link-page"><?php echo _("MSc Logistics &amp; Supply Chain Management"); ?></a></li>
                    								</ul>
                    				  			</li>
                    				  			<li class="dropdown"><a href="javascript:void(0)" class="link-page"><?php echo _("Sustainability"); ?></a>
                                				<ul class="dropdown-menu edugate-dropdown-menu-2" style="margin-left:240px;">
                        							<li><a href="msc_emas.php" class="link-page"><?php echo _("MSc Environmental Management &amp; Assessment Studies"); ?></a></li>
                        							<li><a href="msc_sbdpm.php" class="link-page"><?php echo _("MSc Sustainable Building: Design &amp; Performance Management"); ?></a></li>
                        							<li><a href="msc_sde.php" class="link-page"><?php echo _("MSc Sustainable Development &amp; Environment"); ?></a></li>
                        							<li><a href="msc_senrm.php" class="link-page"><?php echo _("MSc Sustainable Energy &amp; Natural Resource Management"); ?></a></li>
                        							<li><a href="msc_sp.php" class="link-page"><?php echo _("MSc Sustainable Planning"); ?></a></li>
                        							<li><a href="msc_transports.php" class="link-page"><?php echo _("MSc Transports &amp; Urban Planning"); ?></a></li>
                        							<li><a href="msc_sam.php" class="link-page"><?php echo _("MSc Sustainable Agriculture Management"); ?></a></li>
                        							<li><a href="msc_cccm.php" class="link-page"><?php echo _("MSc Climat Change &amp; Carbon Management"); ?></a></li>
                    								</ul>
                    				  			</li>
                    				  			<li class="dropdown"><a href="javascript:void(0)" class="link-page"><?php echo _("Health"); ?></a>
                                				<ul class="dropdown-menu edugate-dropdown-menu-2" style="margin-left:240px;">
                        							<li><a href="ma_health.php" class="link-page"><?php echo _("MA Health Services Management"); ?></a></li>
                    								</ul>
                    				  			</li>
                    				  			<li class="dropdown"><a href="javascript:void(0)" class="link-page"><?php echo _("Information System"); ?></a>
                                				<ul class="dropdown-menu edugate-dropdown-menu-2" style="margin-left:240px;">
                        							<li><a href="#" class="link-page"><?php echo _("MSc Big Data Analysis"); ?></a></li>
                        							<li><a href="#" class="link-page"><?php echo _("MSc Transforming into Digital Business"); ?></a></li>
                        							<li><a href="#" class="link-page"><?php echo _("MSc Internet of Thinking Analysis"); ?></a></li>
                        							<li><a href="msc_ebusiness.php" class="link-page"><?php echo _("MSc E-Business &amp; Entrepreneurship"); ?></a></li>
                        							<li><a href="msc_network.php" class="link-page"><?php echo _("MSc Network, Computer &amp; System Security"); ?></a></li>
                        							<li><a href="msc_org_management.php" class="link-page"><?php echo _("MSc IT: Organisational &amp; Management Change"); ?></a></li>
                        							<li><a href="msc_itproject.php" class="link-page"><?php echo _("MSc IT Project Management"); ?></a></li>
                    								</ul>
                    				  			</li>
                    				  			<li class="dropdown"><a href="javascript:void(0)" class="link-page"><?php echo _("Finance"); ?></a>
                                				<ul class="dropdown-menu edugate-dropdown-menu-2" style="margin-left:240px;">
                        							<li><a href="msc_finance.php" class="link-page"><?php echo _("MSc Finance &amp; Management"); ?></a></li>
                    								</ul>
                    				  			</li>
                    						</ul>
                    				  </li>
                    				  <li class="dropdown"><a href="javascript:void(0)" class="link-page"><?php echo _("Summer &amp; Winter Programme"); ?></a>
                                		<ul class="dropdown-menu edugate-dropdown-menu-2" style="margin-left:270px;">
                        					<li><a href="summer_prog.php" class="link-page"><?php echo _("Summer Programme"); ?></a></li>
                        					<li><a href="winter_prog.php" class="link-page"><?php echo _("Winter Programme"); ?></a></li>
                    						</ul>
                    				  </li>
                                <li><a href="exchange.php" class="link-page"><?php echo _("Exchange Programme"); ?></a></li>
                                <li><a href="e_learning.php" class="link-page"><?php echo _("E-Learning"); ?></a></li>
                                <li><a href="language.php" class="link-page"><?php echo _("Language Programme"); ?></a></li>
                                <li class="dropdown"><a href="javascript:void(0)" class="link-page"><?php echo _("Continuing Professional Development"); ?></a>
                                		<ul class="dropdown-menu edugate-dropdown-menu-2" style="margin-left:270px;">
                        					<li><a href="certificate_bda.php" class="link-page"><?php echo _("Certificate of Expert in Big Data Analysis"); ?></a></li>
                        					<li><a href="certificate_tdb.php" class="link-page"><?php echo _("Certificate of Expert in Transforming into Digital Business"); ?></a></li>
                        					<li><a href="certificate_ita.php" class="link-page"><?php echo _("Certificate of Expert in Internet of Thinking Analysis"); ?></a></li>
                        					<li><a href="#" class="link-page"><?php echo _("Certificate in Territorial Sustainable Development"); ?></a></li>
                        					<li><a href="#" class="link-page"><?php echo _("Certificate in Facility management in Sustainable building"); ?></a></li>
                        					<li><a href="certificate_cpm.php" class="link-page"><?php echo _("Certificate in Project Management"); ?></a></li>
                        					<li><a href="certificate_del.php" class="link-page"><?php echo _("Certificate of Development and Education Leadership"); ?></a></li>
                    						</ul>
                    	   		  </li>
                                <li><a href="work_professional.php" class="link-page"><?php echo _("Professional Experience"); ?></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)" class="main-menu"><?php echo _("Research"); ?><span class="fa fa-angle-down icons-dropdown"></span></a>
                            <ul class="dropdown-menu edugate-dropdown-menu-1">
                            	 <li><a href="#" class="link-page"><?php echo _("Centers and programmes"); ?></a></li>
                    				 <li><a href="#" class="link-page"><?php echo _("Library"); ?></a></li>
                    				 <li><a href="#" class="link-page"><?php echo _("Research Clusters"); ?></a></li> 
                    				 <li><a href="#" class="link-page"><?php echo _("Publications"); ?></a></li>
                    				 <li><a href="#" class="link-page"><?php echo _("Visiting Programmes"); ?></a></li>
                    				 <li><a href="#" class="link-page"><?php echo _("Research Support"); ?></a></li>
                    			 </ul>
                        </li>	
                        <li class="dropdown"><a href="javascript:void(0)" class="main-menu"><?php echo _("Executive MBA"); ?><span class="fa fa-angle-down icons-dropdown"></span></a>
                            <ul class="dropdown-menu edugate-dropdown-menu-1">
                            	 <li><a href="#" class="link-page"><?php echo _("About Us"); ?></a></li>
                    				 <li><a href="#" class="link-page"><?php echo _("Degree Programmes"); ?></a></li>
                    				 <li><a href="#" class="link-page"><?php echo _("Short Programmes"); ?></a></li>                   
                    				 <li><a href="#" class="link-page"><?php echo _("Customised Programmes"); ?></a></li>
                    				 <li><a href="#" class="link-page"><?php echo _("Contact &amp; Direction"); ?></a></li>
                    				 <li><a href="#" class="link-page"><?php echo _("Sign up for Updates"); ?></a></li>
                    				 <li><a href="#" class="link-page"><?php echo _("News"); ?></a></li>
                    			 </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)" class="main-menu"><?php echo _("Public Relations"); ?><span class="fa fa-angle-down icons-dropdown"></span></a>
                            <ul class="dropdown-menu edugate-dropdown-menu-1">
                            	 <li><a href="#" class="link-page"><?php echo _("News at the Institute"); ?></a></li>
                    				 <li><a href="#" class="link-page"><?php echo _("Public Event"); ?></a></li>
                    				 <li><a href="#" class="link-page"><?php echo _("Medias"); ?></a></li>
                    				 <li><a href="#" class="link-page"><?php echo _("Employers"); ?></a></li>
                    				 <li><a href="#" class="link-page"><?php echo _("Test TypeForm"); ?></a></li>
                    			 </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)" class="main-menu"><?php echo _("Alumni"); ?><span class="fa fa-angle-down icons-dropdown"></span></a>
                            <ul class="dropdown-menu edugate-dropdown-menu-1">
                            	 <li><a href="#" class="link-page"><?php echo _("Who we are"); ?></a></li>
                     			 <li><a href="#" class="link-page"><?php echo _("Blog"); ?></a></li>
                     			 <li><a href="#" class="link-page"><?php echo _("Chapters"); ?></a></li>
                     			 <li><a href="#" class="link-page"><?php echo _("Ambassadors"); ?></a></li>
                     			 <li><a href="#" class="link-page"><?php echo _("Class Leaders"); ?></a></li>
                     			 <li><a href="#" class="link-page"><?php echo _("Services"); ?></a></li>
                     			 <li><a href="#" class="link-page"><?php echo _("Get Involved"); ?></a></li>
                    			 </ul>
                        </li>
                        <li class="dropdown"><a href="contact.php" class="main-menu"><?php echo _("Contact"); ?><span class="fa fa-angle-down icons-dropdown"></span></a></li> 
                   	</ul>
                </nav>
            </div>
        </div>
    </div>
</header>
