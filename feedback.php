



<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Feedback</title>



  <link rel="stylesheet" href="assets/css/material.css">
  <link rel="stylesheet" href="assets/css/tether.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/socicon.min.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/add.css" type="text/css">



</head>
<body>
<section id="ext_menu-s">

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="index.php" class="navbar-logo"><img src="assets/images/logo.png" alt="Mobirise"></a>
                        <a class="navbar-caption" href="index.php">E.D.BLOOD</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                      <li class="nav-item"><a class="nav-link link" href="user/viewrequests.php">VIEW REQUEST</a></li>
                      <li class="nav-item"><a class="nav-link link" href="user/register">REGISTER</a></li>
                      <li class="nav-item"><a class="nav-link link" href="user/login">LOGIN</a></li>
                      <li class="nav-item"><a class="nav-link link" href="camps">CAMPS</a></li>
                      <li class="nav-item"><a class="nav-link link" href="search">SEARCH</a></li>
                      <li class="nav-item"><a class="nav-link link" href="about">ABOUT</a></li>
                      <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" href="#" data-toggle="dropdown-submenu" aria-expanded="false">HELP</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="contact">CONTACT US</a>
                          <a class="dropdown-item" href="faqs">FAQS</a></div></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="mbr-section" id="form1-0" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">

    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">FEEDBACK FORM</h3>
                    <small class="mbr-section-subtitle">Your feedback is highly appreciated and will help us to improve our ability to serve you and other users of our web sites.</small>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">
                    <form method="post" data-form-title="CONTACT FORM">
                      <?php
                        if(isset($msg1)){
                          echo $msg1;
                        }

                        ?>

                        <input type="hidden" value="" data-form-email="true">

                        <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-0-name">First Name<span class="form-asterisk">*</span></label>
                                    <input type="text" class="form-control" name="name" required="" data-form-field="Name" id="form1-0-name">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-0-email">Last Name<span class="form-asterisk">*</span></label>
                                    <input type="text" class="form-control" name="name" required="" data-form-field="Name" id="form1-0-name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-0-name">Phone No.<span class="form-asterisk">*</span></label>
                                    <input type="number" class="form-control" name="name" required="" data-form-field="Name" id="form1-0-name" maxlength="10" minlength="10">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-0-email">Email ID<span class="form-asterisk">*</span></label>
                                    <input type="email" class="form-control" name="name" required="" data-form-field="Email" id="form1-0-email">
                                </div>
                            </div>
                        </div>

                        <div class="row row-sm-offset">
                          <div class="form-group">
                              <label class="form-control-label" for="form1-0-name">Is our website user friendly</label>                              
                              <input type="radio" name="uf" id="rad1">Yes
                              <input type="radio" name="uf" id="rad">No 
                          </div>                             
                        </div>

                        <div class="row row-sm-offset">
                          <div class="form-group">
                              <label class="form-control-label" for="form1-0-name">How interactive do you find it</label>                              
                              <input type="radio" name="int" id="rad2">1
                              <input type="radio" name="int" id="rad">2
                              <input type="radio" name="int" id="rad">3
                              <input type="radio" name="int" id="rad">4
                              <input type="radio" name="int" id="rad">5
                          </div>                             
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="form1-0-message">How is this website helpful</label>
                            <textarea class="form-control" name="message" rows="3" data-form-field="Message" id="form1-0-message"></textarea>
                        </div>
                        <div class="row row-sm-offset">
                          <div class="form-group">
                              <label class="form-control-label" for="form1-0-name">Do you think this website was needed</label>                              
                              <input type="radio" name="ne" id="rad3">Yes
                              <input type="radio" name="ne" id="rad">No 
                          </div>                             
                        </div>

                        <div class="form-group">
                            <label class="form-control-label" for="form1-0-message">Any other comments/suggestions</label>
                            <textarea class="form-control" name="message" rows="5" data-form-field="Message" id="form1-0-message"></textarea>
                        </div>

                        <div><button type="submit" name="btn-contactus" class="btn btn-primary">POST</button></div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-r" style="background-color: black; padding-top: 60px; padding-bottom: 30px;">
    
    <div class="container">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <div><img src="assets/images/logo.png"></div>
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
?> | <a class="text-white" href="about.php">E.D.BLOOD</a></p>
    </div>
    </div>
</footer>


  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/tether.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/SmoothScroll.js"></script>
  <script src="assets/js/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/js/jquery.touchSwipe.min.js"></script>
  <script src="assets/js/script.js"></script>


  <input name="animation" type="hidden">
   <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon"></i></a></div>
  </body>
</html>
