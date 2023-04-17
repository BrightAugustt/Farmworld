<?php
include("../settings/core.php");
// session_start();
include("../controllers/cart_controller.php");
include("../function/function.php");

if (empty($_SESSION['customer_id']) and  empty($_SESSION['customer_email']) and $_SESSION['user_role']!= 2)   {
    header('Location:../Login/login.php');
 };

$custId = get_id();
$all_cartproducts = view_cart_ctr($custId);

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Farm-A-World/checkout</title>

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
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
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
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
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
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="../images/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <ul class="header__menu__dropdown">
                            </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <!-- <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li> -->
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Vegetables & melons</a></li>
                            <li><a href="#">Cereals</a></li>
                            <li><a href="#">Fruit & Nuts</a></li>
                            <li><a href="#">Leguminous Crops</a></li>
                            <li><a href="#">Sugar crops</a></li>

                        </ul>
                    </div>
                </div>
                </ul>
            </div>

        </div>
        </div>

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
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
               
            </div>
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                              
                                <div class="col-lg-12 col-md-6">
                                    <div class="checkout__order">
                                        <h4>Your Order</h4>
                                        <div class="checkout__order__products">Products <span>Total</span></div>
                                        <ul>
                                            <?php
                                            $total = 0;
                                            foreach ($all_cartproducts as $cart) {
                                                $product_total = $cart['total_qty'] * $cart['crop_price'];
                                                $total += $product_total;
                                                echo "
                                                    <li>{$cart['crop_name']} <span>{$product_total}</span></li>
                                                ";
                                            }
                                            ?>
                                        </ul>
                                        <div class="checkout__order__subtotal">Subtotal <span><?php echo $total; ?></span></div>
                                        <div class="checkout__order__total">Total <span><?php echo $total; ?></span></div>
                                        <!-- <button type="submit" class="site-btn">PLACE ORDER</button> -->
                                        <?php $totalsum = totalPrice_ctr($custId); ?>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <!-- <th>Subtotal: <?php echo $totalsum['Multiply']; ?></th> -->
                                            <form method="post" action="" id="paymentForm">
                                                <input type="hidden" name="customer_id" value="<?php echo $custId; ?>">
                                                <input type="hidden" name="crop_name" value="">
                                                <input type="hidden" name="order_id" value="<?php //echo $order_id(); 
                                                                                            ?>">
                                                <input type="hidden" name="description" value="Order payment">
                                                <input type="hidden" name="return_url" value="https://www.example.com/checkout/thank-you">
                                                <input type="hidden" name="cancel_url" value="https://www.example.com/checkout/cancel">
                                                <input type="hidden" name="notify_url" value="https://www.example.com/checkout/paybox-ipn">
                                                <input type="hidden" name="order_amount" value="<?php echo $totalsum['Multiply']; ?>">
                                                <input type="hidden" name="customer_email" value="<?php //echo $_SESSION['customer_email']; ?>">
                                                <th><button type="submit" name="paybox_momo" class="btn btn-success" id="paymomoButton">Pay With MOMO</button></th>
                                                <th><button type="submit" name="paybox_card" class="btn btn-success account" id="paycardButton">Pay With Bank Account</button></th>
                                            </form>
                                            <div class='modal' id='second-modal' data-backdrop='static' data-keyboard='false'>
                                                <div class='modal-dialog'>
                                                    <div class='modal-content'>
                                                        <div class='modal-header'>
                                                            <button type='button' class='btn-second-modal-close close'><span aria-hidden='true'>&times;</span></button>
                                                        </div>
                                                        <div class='modal-body' name="momo">
                                                            <form id='formid' action='../actions/PBpaymentProcess.php' method='POST' class='row g-3' enctype='multipart/form-data'>
                                                                <div class='col-12'>
                                                                    <label>Email Address</label>
                                                                    <input type='text' name='customer_email' id='customer_email' class='form-control' placeholder='someone@example.com'>
                                                                </div>

                                                                <br>
                                                                <div class='col-12'>
                                                                    <p>Please select your network for Payment:</p>
                                                                      <input type="radio" id="mtn" name="network" class='form-control' value="MTN">
                                                                      <label for="MTN">MTN</label><br>
                                                                      <input type="radio" id="vodafone" name="network" class='form-control' value="Vodafone">
                                                                      <label for="Vodafone">Vodafone</label><br>
                                                                      <input type="radio" id="airteltigo" name="network" class='form-control' value="AirtelTigo">
                                                                      <label for="AirtelTigo">AirtelTigo</label>
                                                                </div>

                                                                <br>
                                                                <div class='col-12'>
                                                                    <label>MOMO number</label>
                                                                    <input type="tel" name='customer_contact' id='customer_contact' class='form-control' placeholder='0000000000'>
                                                                </div>
                                                                
                                                                <div class='col-12'>
                                                                    <label>Total Amount</label>
                                                                    <input type='text' name='order_amount' id='order_amount' class='form-control' placeholder="<?php echo $totalsum['Multiply']; ?>" value="<?php echo $totalsum['Multiply']; ?>">
                                                                </div>

                                                                <div class='form-group mt-3'>
                                                                    <input type="hidden" name="customer_id" value="<?php echo $custId; ?>">
                                                                    <!-- <button type="submit" name="paybox_momoSubmit" class="btn btn-success" id="payButton">Pay</button> -->
                                                                    <input type='submit' class='btn btn-success' name='paybox_momoSubmit' value='Submit'>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class='modal-footer'>
                                                            <button type='button' class='btn-second-modal-close btn btn-default'>Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </tr>
                                    </div>
                                </div>

                            </div>
                        </div>

                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="../images/logo.png" alt=""></a>
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
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

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
<script src="https://js.paystack.co/v1/inline.js"></script> 

</html>
<!-- embed script -->
<script>
    const payButton = document.getElementById('paymomoButton');

    payButton.addEventListener('click', () => {
        if ($custId == NULL) { // replace 'userLoggedIn' with your logic to check if the user is logged in
            window.location.href = '../Login/login.php'; // replace '/login' with the URL of your login page
        }
    });
    // Get references to the paymomoButton and paycardButton elements
    document.getElementById("paymomoButton").addEventListener("click", function(event) {
        event.preventDefault(); // prevent the default behavior of form submission
        $('#second-modal').modal('show'); // show the modal
    });
    const paycardButton = document.getElementById("paycardButton");

    // Get references to the modal and form elements
    const modal = document.getElementById("second-modal");
    const form = document.getElementById("paymentForm");


    // Add a click event listener to the paymomoButton
    paymomoButton.addEventListener("click", () => {
        // Display the modal
        modal.style.display = "block";
    });

    // Add a click event listener to the paycardButton
    paycardButton.addEventListener("click", () => {
        // Display the form
        form.style.display = "block";
    });
</script>


<script src="https://widget.paybox.com.co/js/app.js" defer></script>