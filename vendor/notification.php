<?php
@include 'db_conn.php';
?> 
 <!doctype html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="vendor.php"><img src="/Jewellery1/pic/logo5.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>                                                
                                <ul id="navigation">  
                                    <li><a href="vendor.php">Home</a></li>
                                    <li><a href="Rings.php">Rings</a></li>
                                    <li><a href="Earrings.php">Earrings</a></li>
                                    <li><a href="Bracelets&Bangales.php">Bracelets & Bangales</a></li>
                                    <li><a href="Piercing.html">Piercing</a></li>
                                    <li><a href="order.php">Order</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                            <a href="main.php" class="btn btn-danger btn-sm">Logout</a>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
 <!-- notification -->
 <div class="middle-content">
            <div class="container">
                <div class="row"><!-- first row -->
                    <div class="col-md-4"><!-- first column -->    
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4"><!-- second column -->
                        <div class="widget-item">
                            <h3 class="widget-title">Send Notifications</h3>
            
                    <!-- register form grid -->
                    
                        <form name="contactform" id="contactform" action="#" method="post" class="contact-form">
                            <div class="form-group">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                       <label>
                                            Customer Name
                                        </label>
                                        <select name="id" required=""  class="form-control" style="height: 50px;">
                                            <option value="">Select name</option>
                                            <?php
                                            $sql=mysqli_query($conn,"SELECT * FROM user ORDER BY name ASC");
                                            while ($rw=mysqli_fetch_array($sql)) 
                                            {
                                            ?>
                                            <option value='<?php echo $rw['id'];?>'><?php echo $rw['name'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>
                                            Notification
                                        </label>
                                        <textarea required="" rows="7" placeholder="Type the message" name="noti_fication" class="form-control"></textarea>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-aasana-w3 btn-block w-100 font-weight-bold text-uppercase" name="send">SEND</button>
                                </div>
                            </div>
                        </form>
                        
                     </div>
                    </div> <!-- /.widget-item -->
                </div> <!-- /.col-md-4 -->
                </div> <!-- /.row first -->
            </div> <!-- /.container -->
        </div> <!-- /.middle-content -->
    <!-- //notification-->
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href=""><img src="/Jewellery1/pic/logo5.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>The Gallery was founded in 2008, with the objective to make beautiful jewellery accessible, affordable and forever wearable.We aim at revolutionizing the fine jewellery and lifestyle segment in India with a firm focus on craftsmanship, quality and customer experience.</p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="#">Opt to jeppu market road Mangalore</a></li>
                                    <li><a href="#">www.thegallery@gmail.com</a></li>
                                    <li><a href="#">8277116912</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <!-- Footer bottom -->
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-8 col-md-7">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved<i class="fa fa-heart" aria-hidden="true"></i><a href="" target="_blank"></a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>                  
                        </div>
                    </div>
                    
    </footer>
<!-- JS here -->
    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scroll up, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>




    </body>
</html>
<?php
if (isset($_POST['send'])) 
{
        $nid=mysqli_real_escape_string($conn,$_POST['nid']);
        $n_notification=mysqli_real_escape_string($conn,$_POST['noti_fication']);
        $sr=mysqli_query($conn,"SELECT * FROM notification where nid='$nid' and noti_fication='$n_notification'");
        $rows=mysqli_num_rows($sr);
        if($rows>0)
        {
            echo'<script>alert("Already exist"); </script>';
            header('location: notification.php');
        }
        else
        {
            $query=mysqli_query($conn,"INSERT INTO `notification`(`nid`, `noti_fication`, `ndate`) VALUES ('$nid','$n_notification',now())") or die(mysqli_error($conn));
            if ($query==true) 
            {
                echo'<script>alert("Notified successfully");</script>';
                header('location: notification.php');
            }
            else
            {
                echo'<script>alert("Failed");</script>';
                header('location: notification.php');
            }
    }
}
?>