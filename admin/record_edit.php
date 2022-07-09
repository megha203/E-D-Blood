<?php
	require_once 'session.php';
	require_once 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Update User</title>
  <link rel="stylesheet" href="../assets/css/material.css">
  <link rel="stylesheet" href="../assets/css/tether.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/socicon.min.css">
  <link rel="stylesheet" href="../assets/css/animate.min.css">
  <link rel="stylesheet" href="../assets/dropdown/css/style.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/add.css" type="text/css">
		<link rel = "stylesheet" type = "text/css" href = "../inc/css/jquery.dataTables.css" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
</head>
<body>
<section id="ext_menu-s">

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="../index.php" class="navbar-logo"><img src="../assets/images/logo.png" alt="Bloodbank Logo"></a>
                        <a class="navbar-caption" href="../index.php">E.D.BLOOD</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
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
<section class="mbr-section mbr-after-navbar" id="msg-box3-v" style="background-color: rgb(242, 242, 242); padding-top: 120px; padding-bottom: 120px;">

<div class = "container-fluid">
    <div class = "col-md-12 well">
      <a class = "btn btn-success" href = "record.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
      <br/>
      <br/>
      <div class = "row"> 
        <div class = "col-md-2 ">
        </div>

        <div class = "col-md-6">
          <?php
          $acc_query = $MySQLi_CON->query("SELECT * FROM `donation` WHERE id = '$_REQUEST[id]' ORDER BY id ASC");
            //$acc_query = $MySQLi_CON->query("SELECT * FROM `donarregister` WHERE id = '$_REQUEST[id]'") or die(mysqli_error());
            $acc_fetch = $acc_query->fetch_array();
          ?>
          <form method = "POST">
            <div class = "form-group">
              <label>Camp :</label>
              <input  id = "camp" type = "text" value = "<?php echo $acc_fetch['camp']?>" class = "form-control" />
              <input  id = "id" type = "hidden" value = "<?php echo $acc_fetch['id']?>" class = "form-control" />
            </div>
            <div class = "form-group">
              <label>Donation Date :</label>
              <input type = "date" id = "ddate" value= "<?php echo $acc_fetch['ddate']?>" class = "form-control" />
            </div>
            <div class = "form-group">
              <label>Blood Group :</label>
              <input type = "text" id = "bloodgroup"  value= "<?php echo $acc_fetch['bloodgroup']?>" class = "form-control" />
            </div>
            <div class = "form-group">
              <label>Units :</label>
              <input  id = "pints" type="tel" value = "<?php echo $acc_fetch['pints']?>" class = "form-control" />
            </div>
            <div id = "loading">
            </div>
            <br />
            <div class = "form-group">
              <button  type = "button" id = "rec_edit" class = "btn btn-warning form-control"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
            </div>
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
  
  <script src="../assets/js/SmoothScroll.js"></script>
  <script src="../assets/js/jquery.viewportchecker.js"></script>
  <script src="../assets/dropdown/js/script.min.js"></script>
  <script src="../assets/js/jquery.touchSwipe.min.js"></script>
<script src = "../inc/js/jquery-3.1.1.js"></script>
<script src = "../inc/js/bootstrap.js"></script>
<script src = "../inc/js/script.js"></script>
<script src = "../inc/js/jquery.dataTables.min.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	})
</script>
  
  
  <input name="animation" type="hidden">
   <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon"></i></a></div>
  </body>
</html>