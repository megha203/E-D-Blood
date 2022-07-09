<?php
include_once 'db.php';
include 'log.php';



if(isset($_SESSION['userSessionAdmin']))
{
  header("Location: account");
}
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Login</title>
  
  

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

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="../index.php" class="navbar-logo"><img src="../assets/images/logo.png" alt="Bloodbank"></a>
                        <a class="navbar-caption" href="../index.php">E.D. BLOOD</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
<li class="nav-item"><a class="nav-link link" href="user/viewrequests.php">VIEW REQUEST</a></li>
					<li class="nav-item"><a class="nav-link link" href="../camps.php">CAMPS</a></li>
					<li class="nav-item"><a class="nav-link link" href="../search.php">SEARCH</a></li>
					<li class="nav-item"><a class="nav-link link" href="../about.php">ABOUT</a></li>
					
                    </button>

                </div>
            </div>
                   
        </div>
    </nav>
                                                  
</section>

<section class="engine"><a rel="external" href="#">easy responsive website maker software download</a></section><section class="mbr-section mbr-after-navbar" id="msg-box3-w" style="background-color: rgb(242, 242, 242); padding-top: 120px; padding-bottom: 120px;">

    
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">Log in </h3>
                        <?php
                          if(isset($msg3)){
                            echo $msg3;
                          }
                          ?>

                      <form method="post">
                       <table cellpadding="0" cellspacing="0" width="100%"  class="tableborder" style="margin:auto" >
                      <tr><td class="lefttd">E-Mail</td><td>: <input type="email" class="text-input" name="email" required="required" /></td></tr>
					  <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
                      <tr><td class="lefttd">Password</td><td>: <input type="password" class="text-input" name="password" required="required" pattern="[a-zA-Z0-9]{2,10,!,@,#,$,%,^,&,*}" title="please enter only character or numbers between 2 to 10 for password" /></td></tr>
					  <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
                <tr><td>&nbsp;</td><td><input type="submit" value="Sign In "  name="btn-login" 
				style="border:0px; border-radius:10px;  width:150px; height:40px;  box-shadow:1px 1px 5px black; color:white;
				font-weight:bold; font-size:14px; background-color:#D50000; "/></td></tr>
                <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
				</table>
                </form>
</td></tr>
                  <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">   
                      <span><a style=" color:red;" href="#">Forgot Password?</a></span>
                   </div> <br><br>
                  <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">   
                      <span >Not Registered?<a style=" color:red;" href="adminregister.php">&nbsp;&nbsp;Sign Up</a></span>
                   </div> 
                  
            </div>
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
?> | <a class="text-white" href="../about.php">E.D. BLOOD</a></p>
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