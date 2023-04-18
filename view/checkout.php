<?php
include("../settings/core.php");
// session_start();
include("../controllers/cart_controller.php");
include("../function/function.php");

if (empty($_SESSION['customer_id']) and  empty($_SESSION['customer_email']) and $_SESSION['user_role'] != 2) {
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


    <!-- Css Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
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
            <!-- <div class="header__cart__price">item: <span>$150.00</span></div> -->
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
                        <!-- <div class="header__cart__price">item: <span>$150.00</span></div> -->
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
                                                <input type="hidden" name="order_amount" value="<?php echo $total; ?>">
                                                <input type="hidden" name="customer_email" value="<?php //echo $_SESSION['customer_email']; 
                                                                                                    ?>">
                                                <th><button type="submit" name="paybox_momo" class="btn btn-success" id="paymomoButton" style="background-color: #16AD22;">Pay With MOMO</button></th>
                                                <th><button type="submit" name="paybox_card" class="btn btn-success account" id="paycardButton" style="background-color:white; color:black;">Pay With Bank Card</button></th>
                                            </form>
                                            <div class='modal' id='first-modal' data-backdrop='static' data-keyboard='false'>
                                                <div class='modal-dialog'>
                                                    <div class='modal-content'>
                                                        <div class='modal-header'>
                                                            <button type='button' class='btn-first-modal-close close'><span aria-hidden='true'>&times;</span></button>
                                                        </div>
                                                        <div class='modal-body' name="card">
                                                            <form id='formid' class="credit-card" method='POST' class='row g-3' enctype='multipart/form-data' action='../actions/PBcardpmtprocess.php'>
                                                                <div class="form-header">
                                                                    <h4 class="title">Credit Card Details</h4>
                                                                </div>
                                                                <br>
                                                                <input type="hidden" name="crop_name" value="<?php echo $cart['crop_name']; ?>">
                                                                <input type="hidden" name="date" value="<?php echo date("Y-M-D"); ?>">
                                                                <input type="hidden" name="total_qty" value="<?php echo $cart['total_qty']; ?>">
                                                                <input type="hidden" name="order_amount" value="<?php echo $total; ?>">
                                                                <input type="hidden" name="customer_email" value="<?php echo $_SESSION['customer_email']; ?>">
                                                                <input type="hidden" name="customer_id" value="<?php echo $custId; ?>">

                                                                <div class='col-12'>
                                                                    <label>First Name</label>
                                                                    <input type='text' name='cust_fname' id='cust_fname' class='form-control' placeholder='Steven'>
                                                                </div>

                                                                <div class='col-12'>
                                                                    <label>Last Name</label>
                                                                    <input type='text' name='cust_lname' id='cust_lname' class='form-control' placeholder='Appiah'>
                                                                </div>

                                                                <div class='col-12'>
                                                                    <label>Location</label>
                                                                    <input type='text' name='location' id='location' class='form-control' placeholder='6 Sesame St., Dansoman Accra-Ghana'>
                                                                </div>
                                                                <br>

                                                                <div class='col-12'>
                                                                    <label>Total Amount</label>
                                                                    <input type='text' name='order_amount' id='order_amount' class='form-control' disabled placeholder="<?php echo $totalsum['Multiply']; ?>" value="<?php echo $totalsum['Multiply']; ?>">
                                                                </div>


                                                                <!-- Card Number -->
                                                                <div class='col-12'>
                                                                    <label>Card Number</label>
                                                                    <input type='text' name='card_num' id='card_num' class='form-control' placeholder="Card Number">
                                                                </div>

                                                                <!-- Card Verification Field -->
                                                                <div class='col-12'>
                                                                    <label>CVV Number</label>
                                                                    <input type="password" class='form-control' name="card_cvc" placeholder="CVV">
                                                                </div>

                                                                <br>
                                                                <!-- Date Field -->
                                                                <div class="date-field">
                                                                    <div class="month">
                                                                        <select name="Month">
                                                                            <option value="january">January</option>
                                                                            <option value="february">February</option>
                                                                            <option value="march">March</option>
                                                                            <option value="april">April</option>
                                                                            <option value="may">May</option>
                                                                            <option value="june">June</option>
                                                                            <option value="july">July</option>
                                                                            <option value="august">August</option>
                                                                            <option value="september">September</option>
                                                                            <option value="october">October</option>
                                                                            <option value="november">November</option>
                                                                            <option value="december">December</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="year">
                                                                        <select name="Year">
                                                                            <option value="2016">2016</option>
                                                                            <option value="2017">2017</option>
                                                                            <option value="2018">2018</option>
                                                                            <option value="2019">2019</option>
                                                                            <option value="2020">2020</option>
                                                                            <option value="2021">2021</option>
                                                                            <option value="2022">2022</option>
                                                                            <option value="2023">2023</option>
                                                                            <option value="2024">2024</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                          
                                                                <!-- Buttons -->
                                                                <div class='form-group mt-3'>
                                                                    <button type="submit" name="paybox_cardSubmit" class="btn btn-success">Proceed</button>
                                                                </div>
                                                                <div class='modal-footer'>
                                                                    <button type='button' class='btn-second-modal-close btn btn-default'>Close</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class='modal' id='second-modal' data-backdrop='static' data-keyboard='false'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <!-- <div class='modal-header'>
                                                            <button type='button' class='btn-second-modal-close close'><span aria-hidden='true'>&times;</span></button>
                                                        </div> -->
                    <div class='modal-body' name="momo">
                        <form id='formid' action='../actions/PBpaymentProcess.php' method='POST' class='row g-3' enctype='multipart/form-data'>
                            <input type="hidden" name="crop_name" value="<?php echo $cart['crop_name']; ?>">
                            <input type="hidden" name="date" value="<?php echo date("Y-M-D"); ?>">
                            <input type="hidden" name="total_qty" value="<?php echo $cart['total_qty']; ?>">
                            <input type="hidden" name="order_amount" value="<?php echo $total; ?>">
                            <input type="hidden" name="customer_email" value="<?php echo $_SESSION['customer_email']; ?>">
                            <div class='col-12'>
                                <label>Email Address</label>
                                <input type='text' name='customer_email' id='customer_email' class='form-control' value="<?php echo $_SESSION['customer_email']; ?>" disabled>
                            </div>

                            <div class='col-12'>
                                <label>Location</label>
                                <input type='text' name='location' id='location' class='form-control' placeholder='6 Sesame St., Dansoman Accra-Ghana'>
                            </div>

                            <br>

                            <p>Please select your network for Payment:</p>
                            <div class=' form-check form-check-inline'>
                                  <input class="form-check-input" type="radio" id="mtn inlineRadio1" name="network" class='form-control' value="MTN">
                                  <label class="form-check-label" for="MTN">MTN</label>
                            </div>
                            <div class=' form-check form-check-inline'>
                                <input class="form-check-input" type="radio" id="vodafone inlineRadio1" name="network" class='form-control' value="Vodafone">
                                 <label class="form-check-label" for="Vodafone">Vodafone</label><br>
                            </div>
                            <div class=' form-check form-check-inline'>
                                <input class="form-check-input" type="radio" id="airteltigo inlineRadio1" name="network" class='form-control' value="AirtelTigo">
                                 <label class="form-check-label" for="AirtelTigo">AirtelTigo</label>
                            </div>
                    </div>

                    <br>
                    <div class='col-12'>
                        <label>MOMO number</label>
                        <input type="tel" name='customer_contact' id='customer_contact' class='form-control' placeholder='0000000000'>
                    </div>

                    <div class='col-12'>
                        <label>Total Amount</label>
                        <input type='text' name='order_amount' id='order_amount' class='form-control' disabled placeholder="<?php echo $total; ?>" value="<?php echo $total; ?>">
                    </div>

                    <div class='form-group mt-3'>
                        <input type="hidden" name="customer_id" value="<?php echo $custId; ?>">

                        <input type='submit' class='btn btn-success' name='paybox_momoSubmit' style="margin-left: 20px; background-color:#16AD22;" value='Make Payment'>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn-second-modal-close btn btn-default'>Close</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
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
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
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

    paycardButton.addEventListener('click', () => {
        if ($custId == NULL) { // replace 'userLoggedIn' with your logic to check if the user is logged in
            window.location.href = '../Login/login.php'; // replace '/login' with the URL of your login page
        }
    });

    // Get references to the modal and form elements
    const smodal = document.getElementById("second-modal");
    const sform = document.getElementById("paymentForm");


    // Get references to the paymomoButton and paycardButton elements
    document.getElementById("paycardButton").addEventListener("click", function(event) {
        event.preventDefault(); // prevent the default behavior of form submission
        $('#first-modal').modal('show'); // show the modal
    });

    // Get references to the modal and form elements
    const modal = document.getElementById("first-modal");
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