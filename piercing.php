<?php  
include ('db_conn.php');
session_start();
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
        <link rel="stylesheet" href="assets/css/add.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
<header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="home.php"><img src="/Jewellery1/pic/logo5.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>                                                
                                <ul id="navigation">  
                                    <li><a href="home.php">Home</a></li>
                                    <li><a href="Rings.php">Rings</a></li>
                                    <li><a href="Earrings.php">Earrings</a></li>
                                    <li><a href="Bracelets&Bangales.php">Bracelets & Bangales</a></li>
                                    <li><a href="Piercing.php">Piercing</a></li>
                                    <li><a href="contact.php">contact</a></li>
                                 </li>
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
<!--? Hero Area Start-->
 <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>piercing</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--? Hero Area End-->
        <!-- <style>
            .contact-page1 {
                padding: 40px 0;
  text-align: center
            }
            </style> -->
</br>
        <div class="form-container" >
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <h1 class="widget-title">Piercing</h1>
                        <div class="contact-form1">
                            <form name="contactform" id="contactform" action="" method="post">
                            <p> <h6>Enter Name:</h6>
                                    <input name="name" type="text" id="name" placeholder="Your Name" required="" pattern="[A-Za-z\s]+" title="letters only" name="name">
                                </p>
                                <p> <h6>Enter Email:</h6>
                                    <input name="email" type="email" id="email" placeholder="Your Email" name="email" required="" >
                                </p>
                                <p><h6> Phone No:</h6>
                                <input type="tel" type="tel" id="number" placeholder="Phone number" name="number" required>
                                </p>
                                <p><h6> Select Type :</h6>
                                     <select name="type">
                                      <option value="Ear">Ear</option>
                                      <option value="Nose">Nose</option>
                                     </select>
                                </p>
                                <p>
                                <label for="start"><h6> Start date:</h6></label>
                                <input type="date" id="start" name="trip-start"
                                 value="2022-08-25"
                                min="2022-08-25" max="2039-12-20">
                                </p>
                                <p>
                                <p><h6> No of Persons:</h6>
                                    <input name="persons" type="text" id="persons" placeholder="persons" name="persons" required="" > 
                                </p>
                                <input type="submit" class="mainBtn" name="submit" value="Send Message">
                            </form>
                        </div> <!-- /.contact-form -->
                    </div>
                </div>
            </div>
        </div>
        </br>
        </br>
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
if (isset($_POST['submit'])) 
{
        $p_id=mysqli_real_escape_string($conn,$_POST['p_id']);
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $c_persons=mysqli_real_escape_string($conn,$_POST['persons']);
        $query=mysqli_query($conn,"INSERT INTO `piercing`(`p_id`, `name`,`email`,`persons`) VALUES ('$p_id','$name','$email','$c_persons')") or die(mysqli_error($conn));
            if ($query==true) 
            {
                echo'<script>alert("booked successfully")</script>';
                header("Location: piercing.php");
            }
            else
            {
                echo'<script>alert("Failed")</script>';
                header("Location: piercing.php");
            }
        
}
?>


