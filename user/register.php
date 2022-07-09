<?php



session_start();
include_once '../db.php';




if(isset($_SESSION['userSession']))
{
  header("Location: account");
}


if(isset($_POST['btn-register']))

{

  echo 'posted';
  $fname = $MySQLi_CON->real_escape_string(trim($_POST['fname']));
  $lname = $MySQLi_CON->real_escape_string(trim($_POST['lname']));
  $day = $MySQLi_CON->real_escape_string(trim($_POST['day']));
  $month = $MySQLi_CON->real_escape_string(trim($_POST['month']));
  $year = $MySQLi_CON->real_escape_string(trim($_POST['year']));
  $county = $MySQLi_CON->real_escape_string(trim($_POST['county']));
  $email = $MySQLi_CON->real_escape_string(trim($_POST['email']));
  $b_id = $MySQLi_CON->real_escape_string(trim($_POST['b_id']));
  $gender = $MySQLi_CON->real_escape_string(trim($_POST['gender']));
  $mobile = $MySQLi_CON->real_escape_string(trim($_POST['mobile']));
  $password = $MySQLi_CON->real_escape_string(trim($_POST['password']));
  $con_password = $MySQLi_CON->real_escape_string(trim($_POST['con_password']));
  
  $new_password = password_hash($password, PASSWORD_DEFAULT);

 

  
  if($password!=$con_password){
        $msg1 = "<div class='alert bg-info'>
            <button class='close' data-dismiss='alert'>&times;</button>
             Passwords Do Not Match ! Try Again
          </div>";
       }else{


            $check_email = $MySQLi_CON->query("SELECT email, mobile FROM donarregister WHERE email='$email' OR mobile='$mobile'");
            $count=$check_email->num_rows;
  

  
  if($count==0){
    
    
    $query = "INSERT INTO donarregister(fname,lname,email,mobile,password,b_id, gender,day,month,year,county)
          VALUES('$fname','$lname','$email','$mobile','$new_password','$b_id','$gender','$day','$month','$year','$county')";
    
    if($MySQLi_CON->query($query))
    {
            $msg1 =  "<div class='alert bg-succeed'>
          <button class='close' data-dismiss='alert'>&times;</button>
          Successfully registered click  <a href='login'> here </a> to login.
          </div>";
          $_SESSION['userSession'] = $email;
          header("Location: ../index.php");
      
    }
    else
    {
      $msg1 = "<div class='alert bg-info'>
            <button class='close' data-dismiss='alert'>&times;</button> Error while registering !!!
          </div>";
    }
  }
  else{
    
    
    $msg1 = "<div class='alert bg-info'>
        <button class='close' data-dismiss='alert'>&times;</button>
          <strong>Sorry !</strong>  Email or Mobile Number already exists. Please Try another one
        </div>
        ";
      
  }


  }

  
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
  <title>Register</title>



  <link rel="stylesheet" href="../assets/css/material.css">
  <link rel="stylesheet" href="../assets/css/tether.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/socicon.min.css">
  <link rel="stylesheet" href="../assets/css/animate.min.css">
  <link rel="stylesheet" href="../assets/dropdown/css/style.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/add.css" type="text/css">

  <script type='text/javascript'>
    function refreshCaptcha() {
      var img = document.images['captchaimg'];
      img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + Math.random() * 1000;
    }
  </script>



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

            <button class="navbar-toggler pull-xs-left hidden-md-up" type="button" data-toggle="collapse"
              data-target="#exCollapsingNavbar">
              <div class="hamburger-icon"></div>
            </button>

            <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">


              <li class="nav-item"><a class="nav-link link" href="viewrequests.php">VIEW REQUEST</a></li>
              <li class="nav-item"><a class="nav-link link" href="login.php">LOGIN</a></li>
              <li class="nav-item"><a class="nav-link link" href="../camps.php">CAMPS</a></li>
              <li class="nav-item"><a class="nav-link link" href="../search.php">SEARCH</a></li>
              <li class="nav-item"><a class="nav-link link" href="../about.php">ABOUT</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu"
                  href="http://bloodbank.appslab.co.ke/" aria-expanded="false">HELP</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="../contact.php">Contact us</a>
                  <a class="dropdown-item" href="../faqs.php" target="_blank">FAQS</a>
                  <a class="dropdown-item" href="../feedback.php">Feedback</a>
                </div>
              </li>
            </ul>
            <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse"
              data-target="#exCollapsingNavbar">
              <div class="close-icon"></div>
            </button>

          </div>
        </div>

      </div>
    </nav>

  </section>

  <section class="engine"><a rel="external" href="#">html website development</a></section>
  <section class="mbr-section mbr-after-navbar" id="msg-box3-x"
    style="background-color: rgb(242, 242, 242); padding-top: 120px; padding-bottom: 120px;">


    <div class="container">
      <div class="col-md-12">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="h2 text-center">Register as a donor </h2>
        </div>
        <form method="post" id="register-form">

          <?php
            if(isset($msg1)){
              echo $msg1;
            }

            ?>


          <div class="col-md-8 col-md-offset-2 form-group">
            <label>First Name :</label>
            <input type="text" class="form-control login-field" name="fname" placeholder="Enter First Name"
              id="login-name" required />
            <span class="help-block " id="error"></span>
          </div>

          <div class="col-md-8 col-md-offset-2 form-group">
            <label>Last Name :</label>
            <input type="text" class="form-control login-field" name="lname" placeholder="Enter Last Name"
              id="login-name" required />
            <span class="help-block " id="error"></span>
          </div>
          <div class="col-md-8 col-md-offset-2 form-group">
            <label>Gender</label>
            <div class="col-md-12">
              <div class="col-md-6 col-sm-6 ">
                <input name="gender" type="radio" value="Male" checked="checked" /> Male
                <input name="gender" type="radio" value="Female" /> Female
                <span class="help-block" id="error"></span>
              </div>
            </div>

          </div>
          <div class="col-md-8 col-md-offset-2 form-group">
            <label>Date of Birth</label>
            <div class="col-md-12" <div class="col-md-4 col-sm-4 ">

            </div>
            <div class="col-md-4 col-sm-4 ">
              <select class="form-control login-field" name="month" id="login-form" required>
                <option value="">Month</option>
                <option class="text-xs-center" value="January">JAN</option>
                <option class="text-xs-center" value="February">FEB</option>
                <option class="text-xs-center" value="March">MAR</option>
                <option class="text-xs-center" value="April">APR</option>
                <option class="text-xs-center" value="May">MAY</option>
                <option class="text-xs-center" value="June">JUNE</option>
                <option class="text-xs-center" value="July">JULY</option>
                <option class="text-xs-center" value="August">AUG</option>
                <option class="text-xs-center" value="September">SEPT</option>
                <option class="text-xs-center" value="October">OCT</option>
                <option class="text-xs-center" value="November">NOV</option>
                <option class="text-xs-center" value="December">DEC</option>
              </select>
            </div>
            <div class="col-md-4 col-sm-4 ">
              <select class="form-control login-field" name="day" id="login-stream" required>
                <option value="">Day</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
            </div>
            <div class="col-md-4 col-sm-4 ">
              <input type="number" class="form-control login-field" name="year" placeholder="year" id="year" required />
              <span class="help-block " id="error"></span>
            </div>
          </div>


          <div class="col-md-8 col-md-offset-2 form-group">
            <label>Mobile No :</label>
            <input type="text" class="form-control login-field" name="mobile" placeholder="Enter Mobile No" id="mobile"
              required pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no." />
            <span class="help-block " id="error"></span>
          </div>

          <div class="col-md-8 col-md-offset-2 form-group">
            <label>Blood Group</label>
            <input type="text" class="form-control login-field" name="b_id" placeholder="Enter your Blood Group"
              id="b_id" />
            <span class="help-block " id="error"></span>
          </div>


          <div class="col-md-8 col-md-offset-2 form-group">
            <label>Country :</label>
            <select name="county" class="form-control" required>
              <option class="text-xs-center">Select Country</option>
              <option class="text-xs-center" value="India">India</option>

            </select>

          </div>

          <div class="col-md-8 col-md-offset-2 form-group">
            <label> Email :</label>
            <input type="text" class="form-control login-field" name="email" placeholder="Enter Email" id="email"
              required />
            <span class="help-block " id="error"></span>
          </div>

          <div class="col-md-8 col-md-offset-2 form-group">
            <label>Password :</label>
            <input type="password" class="form-control login-field" name="password" placeholder="Enter Password"
              id="password" required />
            <span class="help-block " id="error"></span>
          </div>

          <div class="col-md-8 col-md-offset-2 form-group">
            <label>Confirm Password :</label>
            <input type="password" class="form-control login-field" name="con_password" placeholder="Confirm Password"
              id="con_password" required />
            <span class="help-block " id="error"></span>
          </div>


          <div class="col-md-8 col-md-offset-2 form-group">
            <input type="submit" value="Sign Up" name="btn-register"
              style="border:0px;  width:150px; height:40px; border-radius: 10px;  box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; background-color:#D50000; " />
            <span class="help-block" id="error"></span>
          </div>


          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          </table>
        </form>
        <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
          <span>Already Registered ? <a style=" color:red;" href="../user/login.html"> &nbsp; Sign In</a></span>
        </div>

      </div>
    </div>
    </div>

  </section>

  <section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-r"
    style="background-color: black; padding-top: 60px; padding-bottom: 30px;">

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

  <footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-2"
    style="background-color: black; padding-top: 1.75rem; padding-bottom: 1.75rem;">
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
  <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i
        class="mbr-arrow-up-icon"></i></a></div>
</body>

</html>