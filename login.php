<?php
session_start();
include_once "include/header.inc.php";
?>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="page-login rlp">
                    <div class="container">
                        <div class="login-wrapper rlp-wrapper">
                            <div class="login-table rlp-table"><a href="index.php"><img src="assets/images/sdmi_logo2.png" alt="" class="login"/></a>

                                <div class="login-title rlp-title"><?php echo _("login to your sdmi-edu.fr account!"); ?></div>
                                <div class="login-form bg-w-form rlp-form">
                                    <div class="row">
                                  		<form method="post" action="after_login.php">
                                        <div class="col-md-12"><label for="email" class="control-label form-label"><?php echo _("email"); ?> <span class="highlight">*</span></label><input id="email" name="email "type="email" placeholder="" class="form-control form-input"/><!--p.help-block Warning !--></div>
                                        <div class="col-md-12"><label for="password" class="control-label form-label"><?php echo _("password"); ?> <span class="highlight">*</span></label><input id="password" name="password" type="password" placeholder="" class="form-control form-input"/><!-- p.help-block Warning !--></div>
                                    </div>
                                    <div class="row">
                    							<label>
                        						<input type="checkbox">
                    							</label>
                    							<label><?php echo _("Remember Me"); ?></label>&nbsp;&nbsp;&nbsp;&nbsp;
                    							<label><a href="#"><strong><?php echo _("Forgot Password?"); ?></strong></a></label>
                							</div>
                                    <p><?php echo _("Not member yet?"); ?> &nbsp;<a href="register.php"><?php echo _("Sign Up."); ?></a></p>
                                </div>
                                <div class="login-submit">
                                    <button type="submit" name="envoi" class="btn btn-login btn-green"><span><?php echo _("sign in"); ?></span></button>
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
	include_once "include/footer.inc.php";
?>