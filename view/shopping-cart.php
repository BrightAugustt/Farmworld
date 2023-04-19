<?php
include("../settings/core.php");
include("../controllers/cart_controller.php");
include("../function/function.php");

$custId = get_id();
$all_cartproducts = view_cart_ctr($custId);
$ip_add = getIPAddress();
$total = 0;

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<!-- Add CSS styles for the alert messages -->
<style>
  .alert {
    padding: 10px;
    border-radius: 4px;
    margin: 10px 0;
  }
  
  .alert-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
  }
  
  .alert-danger {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
  }
</style>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="../images/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
         
           
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> farmaworld@gmail.com</li>
                <!-- <li>Free Shipping for all Order of $99</li> -->
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> farmaworld@gmail.com</li>
                                <!-- <li>Free Shipping for all Order of $99</li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__auth">
                                <a href="../Login/login.php"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
   
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        

        </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <div id="response-message"></div>
    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Update</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $total = 0; // initialize the total variable outside the loop

                                foreach ($all_cartproducts as $cart) {
                                    $subtotal = $cart['total_qty'] * $cart['crop_price']; // calculate the subtotal for each product
                                    $total += $subtotal; // add the subtotal to the total
                                    echo "
                                        <tr class='cart-row'>
                                            <td class= 'shoping__cart__item'>
                                                <img src='./../images/crops/{$cart['crop_image']}' style = height:100px; width:100px;>
                                                <h5>{$cart['crop_name']}</h5>
                                            </td>
                                            <td class='shoping__cart__price'>
                                                GH₵ {$cart['crop_price']}
                                            </td>
                                            <td class='shoping__cart__quantity'>
                                                <div class='quantity'>
                                                    
                                                    <input type='text' value='{$cart['total_qty']}' data-product-id='{$cart['crop_id']}' style='width:50px; text-align:center; class='quantity-input' disabled>
                                                    
                                                </div>
                                            </td>
                                            <td class='shoping__cart__total'>
                                            {$cart['total_price']}
                                            </td>


                                            <td>
                                            <form class='form-inline update-cart-form' method='POST' action='../actions/updateCart.php'  id='quantity-form'>
                                                <input class='form-control mr-sm-2' type='hidden' value='$ip_add' name='ip_address'>
                                                <input class='form-control mr-sm-2' type='hidden' value='{$custId}' name='customer_id'>
                                                <input class='form-control mr-sm-2' type='hidden' name='crop_id' value ='{$cart['crop_id']}'>
                                                <input class='form-control mr-sm-2' name='qty' type='number' value='{$cart['total_qty']}' min='1' aria-label='Quantity'>
                                        
                                            </form>
                                            </td>
                                            
                                            <td class='shoping__cart__item__close'>
                                                <a href='../actions/deletefromCart.php?crop_id={$cart['crop_id']}'data-toggle='tooltip'><button class='removebutton'><span><i class='fa fa-trash-o'></i></span></button></a>
                                            </td>
                                            <br>
                                        </tr> ";
                                }
                                
                                if(isset($_SESSION['cart'])){
                                    foreach($_SESSION['cart'] as $cart){
                                        $subtotal = $cart['total_qty'] * $cart['crop_price']; // calculate the subtotal for each product
                                        $total += $subtotal; // add the subtotal to the total
                                        echo "
                                            <tr class='cart-row'>
                                                <td class= 'shoping__cart__item'>
                                                    <img src='./../images/crops/{$cart['crop_image']}' style = height:100px; width:100px;>
                                                    <h5>{$cart['crop_name']}</h5>
                                                </td>
                                                <td class='shoping__cart__price'>
                                                    GH₵ {$cart['crop_price']}
                                                </td>
                                                <td class='shoping__cart__quantity'>
                                                    <div class='quantity'>
                                                        
                                                        <input type='text' value='{$cart['total_qty']}' data-product-id='{$cart['crop_id']}' style='width:50px; text-align:center; class='quantity-input' disabled>
                                                        
                                                    </div>
                                                </td>
                                                <td class='shoping__cart__total'>
                                                {$cart['total_price']}
                                                </td>
    
    
                                                <td>
                                                <form class='form-inline update-cart-form' method='POST' action='../actions/updateCart.php'  id='quantity-form'>
                                                    <input class='form-control mr-sm-2' type='hidden' value='$ip_add' name='ip_address'>
                                                    <input class='form-control mr-sm-2' type='hidden' value='{$custId}' name='customer_id'>
                                                    <input class='form-control mr-sm-2' type='hidden' name='crop_id' value ='{$cart['crop_id']}'>
                                                    <input class='form-control mr-sm-2' name='qty' type='number' value='{$cart['total_qty']}' min='1' aria-label='Quantity'>
                                            
                                                </form>
                                                </td>
                                                
                                                <td class='shoping__cart__item__close'>
                                                    <a href='../actions/deletefromCart.php?crop_id={$cart['crop_id']}'data-toggle='tooltip'><button class='removebutton'><span><i class='fa fa-trash-o'></i></span></button></a>
                                                </td>
                                                <br>
                                            </tr> ";
                                    }
                                }
                                ?>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php $totalsum = totalPrice_ctr($custId); ?>
                <div class="col-lg-4">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span><?php echo $total; ?></span></li>
                        </ul>
                        <a href="./checkout.php" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="index.php" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->



    <!-- Available Products Section Start -->



    <!-- Available Products Section End -->


    <!-- Categories Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="index.php"><img src="../images/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Phone: 0544262308</li>
                            <li>Email: farmaworld@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <script>
          $(document).ready(function() {
    let timer = null; // Declare a timer variable
  
    // Listen for focusout event on the quantity input field
    $('#qty-input').on('focusout', function() {
      clearTimeout(timer); // Clear any previous timers
      
      // Set a timer to trigger the AJAX request after a short delay (500ms)
      timer = setTimeout(function() {
        const formData = $('#quantity-form').serialize(); // Serialize form data
        const url = '../actions/updateCart.php'; // Replace with your actual URL
        
        $.ajax({
          url: url,
          type: 'POST',
          data: formData,
          dataType: 'json', // Expect a JSON response
          success: function(response) {
            // Handle successful response
            if (response.status === 'success') {
              $('#response-message').html(`<div class="alert alert-success">${response.message}</div>`); // Show success message in a styled element
              location.reload(); // Refresh the page to update the UI
            } else {
              $('#response-message').html(`<div class="alert alert-danger">${response.message}</div>`); // Show error message in a styled element
            }
          },
          error: function(jqXHR, textStatus, errorThrown) {
            // Handle error response
            console.error(errorThrown);
          }
        });
      }, 500);
    });
  });

    </script>


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>