<?php

include_once 'db.php';
include_once 'log.php';

if(isset($_POST['btn-password']))
{
	$email = $MySQLi_CON->real_escape_string(trim($_POST['email']));
	$upass = $MySQLi_CON->real_escape_string(trim($_POST['password']));
	$password_again = $MySQLi_CON->real_escape_string(trim($_POST['password_again']));

	$new_password = password_hash($upass, PASSWORD_DEFAULT);

	$query = $MySQLi_CON->query("SELECT * FROM donarregister WHERE email='$email'");
	$row=$query->fetch_array();

	if($upass!=$password_again){
      	$msg3 = "<div class='alert bg-info'>
						<button class='close' data-dismiss='alert'>&times;</button>
						 Passwords Do Not Match! Try Again
					</div>";
       }else{
	if ($row['email']==$email) {
		$updateQuery1 = "UPDATE donarregister SET password='$new_password' WHERE email='$email'";
		mysqli_query($MySQLi_CON,$updateQuery1);

			if(isset($_SESSION['userSession']))
				{
				session_start();
				session_destroy();
				unset($_SESSION['userSession']);
				header("Location: login");
				exit();
			}

		$msg3 = "<div class='alert bg-succeed'>
					<button class='close' data-dismiss='alert'>&times;</button>
					Password Successfully Changed. Click <a href='login' >here</a> to login
			  	</div>";

	}else {
		$msg3 = "<div class='alert bg-info'>
						<button class='close' data-dismiss='alert'>&times;</button> Email or ID NO does not Match existing Acount details.
					Please Try Again</div>";
	}

}
}

	$MySQLi_CON->close();

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Change Password</title>



  <link rel="stylesheet" href="../assets/css/material.css">
  <link rel="stylesheet" href="../assets/css/tether.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/socicon.min.css">
  <link rel="stylesheet" href="../assets/css/animate.min.css">
  <link rel="stylesheet" href="../assets/dropdown/css/style.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/add.css" type="text/css">



</head>
<body>
<section id="ext_menu-s">

     <nav class="navbar navbar-dropdown bg-color black navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="../index.php" class="navbar-logo"><img src="../assets/images/logo.png" alt="Mobirise"></a>
                        <a class="navbar-caption" href="../index.php">E.D.BLOOD</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-left hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                   <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                    

                      <li class="nav-item"><a class="nav-link link" href="../about.php">ABOUT</a></li>
                    
                    </ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"><a rel="external" href="index">best offline web page maker</a></section><section class="mbr-section mbr-after-navbar" id="msg-box3-z" style="background-color: rgb(242, 242, 242); padding-top: 120px; padding-bottom: 120px;">


    <div class="container">

            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">Change Your Password</h3>
                <?php
							if(isset($msg3)){
								echo $msg3;
							}
							?>
            </div>
        <div>
		<form method="post">
                       <table cellpadding="0" cellspacing="0" width="100%"  class="tableborder" style="margin:auto" >
                      <tr>
                        <td class="lefttd">Email</td>
                        <td>: <input class="text-input" type="email" name="email" required="required" </td>
                      </tr>
            <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
     <tr>
                        <td class="lefttd">New Password</td>
                        <td>: <input class="text-input" type="password" name="password" required="required" /></td>
                      </tr>
            <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	<tr>
                        <td class="lefttd">Confirm New Password</td>
                        <td>: <input class="text-input" type="password" name="password_again" required="required" /></td>
                      </tr>
            <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>

                <tr><td>&nbsp;</td><td><input type="submit" value="Change Password"   name="btn-password"
        style="border:0px; border-radius: 10px;  width:150px; height:40px;  box-shadow:1px 1px 5px black; color:white;
        font-weight:bold; font-size:14px; background-color:#D50000;  "/></td></tr>
                <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
        </table>
                </form>
		</div>

    </div>

</section>

<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-r" style="background-color: black; padding-top: 60px; padding-bottom: 30px;">
    
    <div class="container">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <div><img src="../assets/images/logo.png"></div>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Address</strong><br>Atharva College Of Engineering
Atharva Educational Complex,
Malad Marve Road, Charkop Naka,
Malad (W), Mumbai – 400095, India<br></p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Contacts</strong><br>
Email: bloodlatruist@gmail.com<br>
Phone: +91 9876543211<br></p>
            </div>
           

        </div>
    
</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-2" style="background-color: black; padding-top: 1.75rem; padding-bottom: 1.75rem;">
    <div class="container">
        <p class="text-xs-center">&copy; <?php 
$copyYear = 2018; 
$curYear = date('Y'); 
echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
?> | <a class="text-white" href="../about.php">E.D.BLOOD</a></p>
    </div>
    </div>
</footer>


  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/tether.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/SmoothScroll.js"></script>
  <script src="../assets/js/jquery.viewportchecker.js"></script>
  <script src="../assets/dropdown/js/script.min.js"></script>
  <script src="../assets/js/jquery.touchSwipe.min.js"></script>
  <script src="../assets/js/script.js"></script>


  <input name="animation" type="hidden">
   <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon"></i></a></div>
  </body>
</html>
