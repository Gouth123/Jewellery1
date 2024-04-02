<?php 
@include 'db_conn.php';

if(isset($_POST['add_to_cart'])){

    $hidden_name = $_POST['hidden_name'];
    $hidden_price = $_POST['hidden_price'];
    $hidden_shop = $_POST['hidden_shop'];
    $product_quantity = 1;
 
    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE cart_name = '$hidden_name'");
 
    if(mysqli_num_rows($select_cart) > 0){
       $message[] = 'product already added to cart';
    }else{
       $insert_product = mysqli_query($conn, "INSERT INTO `cart`(cart_name, price, image, quantity) VALUES('$hidden_name', '$hidden_price', '$hidden_shop', '$product_quantity')");
       $message[] = 'product added to cart succesfully';
    }
 
 }
 if(isset($_GET['delete'])){
     $cart_id = $_GET['delete'];
     mysqli_query($conn, "DELETE FROM cart WHERE cart_id = $cart_id");
     header('location: cart.php');
     };
// if(isset($_POST["add_to_cart"]))
// {
// 	if(isset($_SESSION["shopping_cart"]))
// 	{
// 		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
// 		if(!in_array($_GET["id"], $item_array_id))
// 		{
// 			$count = count($_SESSION["shopping_cart"]);
// 			$item_array = array(
// 				'item_id'			=>	$_GET["id"],
// 				'item_name'			=>	$_POST["hidden_name"],
// 				'item_price'		=>	$_POST["hidden_price"],
// 				'item_quantity'		=>	$_POST["quantity"]
// 			);
// 			$_SESSION["shopping_cart"][$count] = $item_array;
// 		}
// 		else
// 		{
// 			echo '<script>alert("Item Already Added")</script>';
// 		}
// 	}
// 	else
// 	{
// 		$item_array = array(
// 			'item_id'			=>	$_GET["id"],
// 			'item_name'			=>	$_POST["hidden_name"],
// 			'item_price'		=>	$_POST["hidden_price"],
// 			'item_quantity'		=>	$_POST["quantity"]
// 		);
// 		$_SESSION["shopping_cart"][0] = $item_array;
// 	}
// }
?>
<!doctype html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
      <link rel="stylesheet" href="assets/css/style1.css">
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
                          <a href="index.html"><img src="/pic/logo5.png" alt=""></a>
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
                                    <li><a href="contact.php">Contact</a></li>
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
		</tbody><!-- /tbody -->
	</table>
</div>			</div>
		</div> 
		</form>
	<!-- For demo purposes – can be removed on production : End -->
</body>
</html>
  <main>
      <!-- Hero Area Start-->
      <div class="slider-area ">
          <div class="single-slider slider-height2 d-flex align-items-center">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-12">
                          <div class="hero-cap text-center">
                              <h2>Cart List</h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="container">

<section class="shopping-cart">

   <h1 class="heading">shopping cart</h1>

   <table>

      <thead>
         <!-- <th>image</th> -->
         <th>name</th>
         <th>price</th>
         <th>quantity</th>
         <th>total price</th>
         <th>action</th>
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
            <!-- <td><img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td> -->
            <td><?php echo $fetch_cart['cart_name']; ?></td>
            <td>₹<?php echo number_format($fetch_cart['price']); ?>/-</td>
            <td><?php echo number_format($fetch_cart['quantity']); ?></td>
            </td>
            <td><?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?>/-</td>
            <td><a href="cart.php?delete=<?php echo $fetch_cart['cart_id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> remove</a></td>
         </tr>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['cart_id']; ?>" >
                  
                  <!-- <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" > -->
                  <!-- <input type="submit" value="update" name="update_update_btn"> -->
               </form>   
            
            
         <?php
           $grand_total = $sub_total;  
            };
         };
         ?>
      </tbody>

   </table>

   <div class="checkout-btn">
      <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">procced to checkout</a>
   </div>

</section>

</div>
   
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
                                <a href=""><img src="/pic/logo5.png" alt=""></a>
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
  <!--? Search model Begin -->
  <div class="search-model-box">
      <div class="h-100 d-flex align-items-center justify-content-center">
          <div class="search-close-btn">+</div>
          <form class="search-model-form">
              <input type="text" id="search-input" placeholder="Searching key.....">
          </form>
      </div>
  </div>
  <!-- Search model end -->

  <!-- JS here -->

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
  
  <!-- Scrollup, nice-select, sticky -->
  <script src="./assets/js/jquery.scrollUp.min.js"></script>
  <script src="./assets/js/jquery.nice-select.min.js"></script>
  <script src="./assets/js/jquery.sticky.js"></script>
  <script src="./assets/js/jquery.magnific-popup.js"></script>

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