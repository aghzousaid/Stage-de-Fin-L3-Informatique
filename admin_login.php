<?php
include_once "include/header.inc.php";
?>

<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="page-login rlp">
                    <div class="container">
                        <div class="login-wrapper rlp-wrapper">
                            <div class="login-table rlp-table"><a href="../index.php"><img src="assets/images/sdmi_logo2.png" alt="" class="login"/></a>

                                <div class="login-title rlp-title">login to your sdmi-edu.fr admin account!</div>
                                <div class="login-form bg-w-form rlp-form">
                                    <div class="row">
                                  		<form method="post" action="connexion_admin.php">
                                        	<div class="col-md-12"><label for="email" class="control-label form-label">email <span class="highlight">*</span></label><input id="email" name="email" type="email" placeholder="" class="form-control form-input"/><!--p.help-block Warning !--></div>
                                        	<div class="col-md-12"><label for="password" class="control-label form-label">password <span class="highlight">*</span></label><input id="password" name="password" type="password" placeholder="" class="form-control form-input"/><!-- p.help-block Warning !--></div>
                                    </div>
                                </div>
                                <div class="login-submit">
                                    <button type="submit" class="btn btn-login btn-green"><span>sign in</span></button>
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