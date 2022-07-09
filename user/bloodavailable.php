<?php
	include_once 'db.php';
?>
<?php
/* Pagination is a technique to divide content into several pages.
 Here we can assign each page a separate URL. By Clicking that URL or Page Number,
 user can view this Page. For every page we assign a incremental
 Page number */



$start=0;
$limit=8;
// limit=1,2;
// limit=2,2;

$t=mysqli_query($MySQLi_CON,"select * from bloodunits ORDER BY id");
$total=mysqli_num_rows($t);



if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $start=($id-1)*$limit;
    //$start=2*1;
    //$start=2;
}
else
{
    $id=1;
}
$page=ceil($total/$limit);

$query=mysqli_query($MySQLi_CON,"select * from bloodunits ORDER BY id limit $start,$limit");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
    <meta name="description" content="">
    <title>Blood Units Available</title>
    <style type="text/css">
        #chart-container {
            width: 100%;
            height: auto;
        }
    </style>



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
                            <a href="../index.php" class="navbar-logo"><img src="../assets/images/logo.png"
                                    alt="Mobirise"></a>
                            <a class="navbar-caption" href="../index.php">E.D.BLOOD</a>
                        </div>

                    </div>
                    <div class="mbr-table-cell">

                        <button class="navbar-toggler pull-xs-left hidden-md-up" type="button" data-toggle="collapse"
                            data-target="#exCollapsingNavbar">
                            <div class="hamburger-icon"></div>
                        </button>

                        <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm"
                            id="exCollapsingNavbar">



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
    <section class="engine"><a rel="external" href="index">.d</a></section>
    <section class="mbr-section mbr-after-navbar" id="msg-box3-v"
        style="background-color: rgb(242, 242, 242); padding-top: 120px; padding-bottom: 0px;">

        <div class="container">
            <div class="col-md-10  text-xs-center">
                <h4 class="mbr-section-title display-2">Available Blood Units</h4>
            </div>
            <form method="post" name="frm">
                <table class="table table-condensed table-bordered table-hover table-striped table-responsive-sm">
                    <tr>
                        <th>BloodGroup</th>
                        <th>Units</th>
                    </tr>
                    <?php
    while($ft=mysqli_fetch_array($query))
    {?>
                    <tr class="bg-table">
                        <td><?= $ft['1']?></td>
                        <td><?= $ft['2']?></td>

                    </tr>
                    <?php
    }

    ?>


                </table>
                <ul style="list-style-type: none; overflow: hidden; background-color: #8e0c0a">
                    <?php if($id > 1) {?> <li style="float: left;"><a href="?id=<?php echo ($id-1) ?>"
                            style="display: block; color: #94ada8; text-align: center; padding: 14px 16px;">Previous</a>
                    </li><?php }?>
                    <?php
        for($i=1;$i <= $page;$i++){
            ?>
                    <li style="float: left;"><a href="?id=<?php echo $i ?>"
                            style="display: block; color: #94ada8; text-align: center; padding: 14px 16px;"><?php echo $i;?></a>
                    </li>
                    <?php
        }
        ?>
                    <?php if($id!=$page)
            //3!=4
        {?>
                    <li style="float: left;"><a href="?id=<?php echo ($id+1); ?>"
                            style="display: block; color: #94ada8; text-align: center; padding: 14px 16px;">Next</a>
                    </li>
                    <?php }?>
                </ul>
            </form>
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
    <script src="../assets/js/jquery.js" type="text/javascript"></script>
    <script src="../assets/js/js-script.js" type="text/javascript"></script>
    <script type="text/javascript" src="../assets/js/Chart.min.js"></script>
    <script type="text/javascript" src="../assets/js/units.js"> </script>

    <input name="animation" type="hidden">
    <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i
                class="mbr-arrow-up-icon"></i></a></div>
</body>

</html>