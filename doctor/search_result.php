<?php
include("db.php");
include 'log.php';


if(!isset($_SESSION['userSessionDoctor']))
{
    header("Location: index");
}
if(isset($_GET['q']) && $_GET['q']!="") :
$data = mysqli_real_escape_string($MySQLi_CON,$_GET['q']);
$keyword =  trim(preg_replace('/\s+/',' ',$data));
$sql=$MySQLi_CON->query("SELECT distinct * FROM `donarregister` WHERE email LIKE '%$keyword%' OR email LIKE '%$keyword%' OR mobile LIKE '%$keyword%'");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
    <meta name="description" content="">
    <title>SEARCH RESULTS</title>



    <link rel="stylesheet" href="../assets/css/material.css">
    <link rel="stylesheet" href="../assets/css/tether.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/socicon.min.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/dropdown/css/style.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/st.css">
    <link rel="stylesheet" href="../assets/css/add.css" type="text/css">
    <script src="js-script.js"></script>
    <script src="jquery.js"></script>



</head>

<body>
    <section id="ext_menu-s">

        <nav class="navbar navbar-dropdown navbar-fixed-top">
            <div class="container">

                <div class="mbr-table">
                    <div class="mbr-table-cell">

                        <div class="navbar-brand">
                            <a href="../index.php" class="navbar-logo"><img src="../assets/images/logo.png"
                                    alt="Bloodbank Logo"></a>
                            <a class="navbar-caption" href="../index.php">E.D.BLOOD</a>
                        </div>

                    </div>
                    <div class="mbr-table-cell">

                        <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse"
                            data-target="#exCollapsingNavbar">
                            <div class="hamburger-icon"></div>
                        </button>
                        <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm"
                            id="exCollapsingNavbar">
                            <li class="nav-item"><a class="nav-link link" href="../index.php">HOME</a></li>
                            <li class="nav-item"><a class="nav-link link" href="../account.php">ACCOUNT</a></li>
                            <li class="nav-item"><a class="nav-link link" href="../camps.php">CAMPS</a></li>
                            <li class="nav-item"><a class="nav-link link" href="../search.php">SEARCH</a></li>
                            <li class="nav-item"><a class="nav-link link" href="../about.php">ABOUT</a></li>
                            <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse"
                                data-target="#exCollapsingNavbar">
                                <div class="close-icon"></div>
                            </button>
                    </div>
                </div>

            </div>
        </nav>

    </section>
    <section class="mbr-section mbr-after-navbar" id="msg-box3-z"
        style="background-color: rgb(242, 242, 242); padding-top: 120px; padding-bottom: 20px;">


        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-xs-center">
                    <h3 class="mbr-section-title display-2">BLOODBANK</h3>
                    <div class="lead">

                        <div>
                            <form action="search_result.php" id="search_form" method="GET">
                                <input name="q" autocomplete="on" id="list_search" type="search" required
                                    value="<?=@$keyword;?>" class="form-control" />
                                <button type="submit"
                                    style="border:0px; margin-top: 10px;  width:150px; height:36px; border-radius: 10px;  box-shadow:1px 1px 5px black; color:white; font-weight: 600; font-size:18px; background-color:#D50000;">Search</button>
                            </form>
                        </div>
                        <div>
                            <?php if(isset($sql) && count($sql) && ($sql->num_rows)) :
                            $count1 = $sql->num_rows;
                            ?>

                            <div class="reslt_bar" style="text-align: left; padding-top: 20px;">
                                <?php foreach ($sql as $key => $search_data) : ?>

                                <table class="table table-responsive bg-table" style="border-style: none; ">


                                    <tr>
                                        <td>Email</td>
                                        <td>: <?=$search_data['email'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Phone No.</td>
                                        <td>: <?=$search_data['mobile'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Blood Group</td>
                                        <td>: <?=$search_data['b_id'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Last Donation Date</td>
                                        <td>: <?=$search_data['last_donation_date'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Last Donation Camp</td>
                                        <td>: <?=$search_data['last_donation_camp'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Number of Donations</td>
                                        <td>: <?=$search_data['number_of_donations'] ?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <?php

                                            if($count1 > 0)
                                            {
                                            ?>
                                    <tr>
                                        <td>
                                            <label style="margin-left:100px;">
                                                <span><a href="updateuser.php?id=<?=$search_data['email'] ?>"
                                                        alt="update">Update</a></span>
                                            </label>


                                        </td>
                                        <td>
                                            <label style="margin-left:100px;">
                                                <span><a href="request.php" alt="request">Request blood</a></span>
                                            </label>


                                        </td>
                                    </tr>
                                    <?php
                                        }

                                        ?>

                                </table><br>

                                <?php endforeach; ?>
                            </div>
                            <?php else :?>
                            <p style="padding-top: 20px;">Your search for <b><?=@$keyword;?></b> did not match any
                                registered donor/recipient.</p>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
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
    <script type="text/javascript">
        $(document).ready(function () {
            $(document).on('keyup', '#list_search', function () {
                var value = $(this).val();
                $.getJSON('ajax_search_list.php?q=' + value, function (data) {
                    var availableTags = data;
                    $("#list_search").autocomplete({
                        source: availableTags,
                        select: function (event, ui) {
                            $(event.target).val(ui.item.value);
                            $('#search_form').submit();
                            return false;
                        },
                    });
                });

            });
        });
    </script>



    <input name="animation" type="hidden">
    <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i
                class="mbr-arrow-up-icon"></i></a></div>
</body>

</html>