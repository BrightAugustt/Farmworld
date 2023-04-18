<?php
include("../settings/core.php");
include("../controllers/product_controller.php");
include("../controllers/cart_controller.php");
$custId = get_id();
// $ip_add = getIPAddress();

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Farmaworld</title>

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
    <link rel="stylesheet" href="css/image.css" type="text/css">
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
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <!-- Php code to take the total cart will be here -->
                <li><a href="shoping-cart.html"><i class="fa fa-shopping-bag"></i> 
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
                <a href="../Login/login.php"><i class="fa fa-user"></i> Login</a>
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
                        <a href="./index.php"><img src="../images//logo.png" alt=""></a>
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
                            <li><a href="shoping-cart.html"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
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
    <section class="hero">
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
                        <h2>Product View</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Product View</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
        <?php

            $cid = $_GET['crop_id'];
            $apat = get_one_croprecord_ctr($cid);
            //print_r($brand_list);
            $cid = $apat['crop_id'];
            $cropname = ($apat['crop_name']);
            $farmername = ($apat['farmer_name']);
            $qty = $apat['qty'];
            $cropprice = ($apat['crop_price']);
            $cdesc = ($apat['crop_desc']);

            //Displaying image
            $pimage = ("<img src='{$apat['crop_image']}'. height=200 width=200");
            $cdesc = ($apat['crop_desc']);
        ?>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src='../images/crops/<?php echo $apat['crop_image']; ?>'  style=border-radius:5px;
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                
                    <div class="product__details__text">
                        <h3><?php echo $cropname; ?></h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price">GHc<?php echo $cropprice; ?></div>
                        <p><?php echo $cdesc; ?></p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <form class='form-inline update-cart-form' method='POST' action='../actions/addtoCart.php'  id='quantity-form'>
                                    <input class='form-control mr-sm-2' type='hidden' name='crop_id' value ="$apat['crop_id']">
                                    <input type="hidden" name="qty" value="1">
                                    <button name="addtocart" class="primary-btn" style="border-radius:5px">ADD TO CART</button>
                                </form>
                                
                            </div>
                        </div>
                        <!-- <a href="../actions/addtoCart.php" name="addtocart" class="primary-btn" style="border-radius:5px">ADD TO CART</a> -->
                        <ul>
                            <li><b>Availability</b> <span><?php echo $qty; ?></span></li>
                            <!-- <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li> -->
                            <li><b>Weight</b> <span>0.5 kg</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/accounts/login/"><i class="fa fa-instagram"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                       
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Reviews <span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                           
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>

                                    <p style="max-width: 900px;">At Farm-A-World, we take pride in sourcing high-quality crops from reputable growers who use sustainable and environmentally friendly farming practices. We understand that consumers want to know where their food comes from and how it's grown, which is why we prioritize transparency and traceability in our supply chain. Our crops are rigorously tested for quality and safety to ensure that they meet our high standards and are safe for consumption.</p>
                                   
                                    <p style="max-width: 900px;">In addition to sourcing high-quality crops, we also have an efficient delivery system that enables us to get the crops to consumers quickly and reliably. Depending on the location of the consumer, our delivery times range from one to two weeks, ensuring that our customers receive fresh and high-quality crops in a timely manner. We work with trusted shipping partners to ensure that our crops are handled with care during transit, and we offer tracking information so that customers can monitor the progress of their orders. Our goal is to make it easy and convenient for customers to access high-quality crops and support sustainable farming practices.</p>

                                    <p style="max-width: 900px;">Ghana is a country known for its diverse agriculture sector, with different regions specializing in different crops. For example, the Ashanti region is known for producing cocoa, while the Northern region is known for producing shea nuts. Other crops grown in Ghana include yams, cassava, maize, and rice. One of the strengths of Ghana's agriculture sector is the experience of the individuals who grow these crops. Many farmers in Ghana have been cultivating their crops for years, and have a deep understanding of the local soil and weather conditions. They use advanced farming techniques and technologies together with their traditional skills to produce high-quality crops that are sought after by consumers both domestically and internationally.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                        eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                        sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                        diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                        Proin eget tortor risus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Related Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php
                        $p_list = get_all_fruit_ctr();
                        foreach ($p_list as $apat) {

                            // print_r($apat);

                            $cropname = $apat['crop_name'];
                            $cropcat = $apat['crop_cat'];
                            $qtyavail = $apat['qty'];
                            $price = $apat['crop_price'];
                            $desc = $apat['crop_desc'];
                            //Displaying image
                            $pimage = ("<img src='{$apat['crop_image']}'. height=150 width=150");
                        
                    ?>
                <div>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 oranges fresh-meat products ">
                    <div class="featured__item">
                        
                        <div class="featured__item__pic set-bg" data-setbg='../images/crops/<?php echo $apat["crop_image"] ?>'>
                            <ul class="featured__item__pic__hover">
                                <li><a href="favourites.php"><i class="fa fa-heart">
                                    <form action="singleCrop.php" method="POST">
                                            <input type="hidden" name="crop_id" value="<?php echo $apat['crop_id'] ?>">
                                            <!-- <a> <button type="submit" name="view"><i class="fa fa-retweet"></i></button></a> -->
                                    </form>
                                    </i></a>
                                </li>
                                <li>
                                    <form action="singleCrop.php" method="GET">
                                            <input type="hidden" name="crop_id" value="<?php echo $apat['crop_id'] ?>">
                                            <button type="submit" name="view" class="fa fa-eye image button"></button>
                                    </form>
                                </li>
                                <li>
                                  
                                        <form action="../actions/addtoCart.php" method="POST">
                                            <input type="hidden" name="crop_id" value="<?php echo $apat['crop_id'] ?>">
                                            <button type="submit" name="addcart" class="fa fa-shopping-cart image button"></button>
                                        </form>
                                    
                                </li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><?php echo $cropname; ?></h6>
                            <h5>GHc<?php echo $price; ?></h5>
                        </div>
                    </div>
                </div>

                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
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
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
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