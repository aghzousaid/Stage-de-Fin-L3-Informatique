﻿<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<title>SDMI | Sustainable Development Management Institute</title>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
    <link rel="shortcut icon" type="image/png" href="images/sdmi_logo_favicon.png"/>
    
    
    <!-- Favicon --> 
	<link rel="shortcut icon" href="images/favicon.ico">
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
   	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- ######### CSS STYLES ######### -->
	
    <link rel="stylesheet" href="css/reset.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
    
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    
    <!-- animations -->
    <link href="js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />
    
    <!-- responsive devices styles -->
	<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />
    
    <!-- shortcodes -->
    <link rel="stylesheet" media="screen" href="css/shortcodes.css" type="text/css" /> 
    
    <link rel="stylesheet" media="screen" href="js/comingsoon/csoon.css" type="text/css" />

    <!-- my css style-->
    <link rel="stylesheet" href="css/my_style.css" type="text/css" /> 
	
    <script src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="js/comingsoon/jquery.bcat.bgswitcher.js"></script>
    
    
    <script>
    $(document).ready(function() {
      //Callback works only with direction = "down"
      $('.flipTimer').flipTimer({ direction: 'down', date: 'July 18, 2015 08:30:30', callback: function() { alert('times up!'); } });
    });
  </script>
    
    
</head>

<body>

<div id="bg-body">
</div><!--end -->

<script type="text/javascript">
var srcBgArray = ["./js/comingsoon/slider_picscs1.jpg","./js/comingsoon/slider_picscs2.jpg","./js/comingsoon/slider_picscs3.jpg"];

$(document).ready(function() {
  $('#bg-body').bcatBGSwitcher({
    urls: srcBgArray,
    alt: 'Full screen background image',
    links: true,
    prevnext: true
  });
});
</script><!--end of bg-body script-->

<script>
function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}
</script>


<div class="site_wrapper">

<div class="comingsoon_page">
<div class="container">

	<div class="clearfix margin_top10"></div>

    <div class="topcontsoon">
    
        <a href="index.html"><img src="images/sdmi_logo.png" alt="logo_sdmi" class="my_size_logo3"/></a>
        
        <div class="clearfix"></div>
        
        <h5>We're Launching Soon</h5>
        
    </div><!-- end section -->
        
   <!-- <div class="countdown_dashboard">
      
        <div class="flipTimer">
        
            <div class="days"></div>
            
            <div class="hours"></div>
            
            <div class="minutes"></div>
            
            <div class="seconds"></div>
            
            <div class="clearfix"></div>
            
            <div class="fttext">DAYS</div>
            <div class="fttext">HRS</div>
            <div class="fttext">MIN</div>
            <div class="fttext">SEC</div>
            
        </div>-->
        
		
    </div><!-- end section -->
    
    
    <div class="clearfix"></div>
    
    <div class="socialiconssoon">
    	
        <p><span class="colorf1">Our website is under construction. We'll be here soon with more information. <br>Get best experience with this one. <br>For any questions ?</span></p>
        
        <div class="clearfix margin_top3"></div>
		
        <!--<form name="myForm" action="" onSubmit="return validateForm();" method="post">
        
        <input type="text" name="email" class="newslesoon" value="Enter email..." onFocus="if (this.value == 'Enter email...') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Enter email...';}" >
        <input type="submit" value="Submit" class="newslesubmit">
        
        </form>-->

        <li class="listyle"></i>&nbsp; <span class="colorf1">Phone : +33 - 615 - 137 - 504</li></span>
        <br>
        <li class="listyle"><span class="colorf1">Email :</span><a href="mailto:info@sdmi-edu.fr" class="colorf1"></i>&nbsp;info@sdmi-edu.fr</a></li></p> 

        <div class="clearfix"></div>

        <div class="margin_top3"></div>

        <a href="https://www.facebook.com/people/Sdmi-Sdmi/100009346509545"><i class="fa fa-facebook"></i></a>
        <!--<a href="#"><i class="fa fa-twitter"></i></a>-->
        <a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="https://www.linkedin.com/company/sustainable-development-management-institute"><i class="fa fa-linkedin"></i></a>

        
	
    </div><!-- end section -->

</div>
</div>

</div>

    
<!-- ######### JS FILES ######### -->
<script type="text/javascript" src="js/comingsoon/jquery.flipTimer.js"></script>

<!-- animations -->
<script src="js/animations/js/animations.min.js" type="text/javascript"></script>


</body>
</html>
