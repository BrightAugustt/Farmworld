<?php
// session_start();
// include("../settings/core.php");
require("../controllers/product_controller.php");
require('../function/cart_function.php');
// $customer_id = isset($_SESSION['customer_id']) ? $_SESSION['customer_id'] : "";
// $customer_id = $_SESSION['customer_id'];
$link;
$linkdash;
$link="../view/shopping-cart.php";
$linkdash="../dash/dashboard.php";
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
            <a href="index.php"><img src="../images/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <!-- Php code to take the total cart will be here -->
                <li><a href="shoping-cart.php"><i class="fa fa-shopping-bag"></i> 
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
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.php">Shoping Cart</a></li>
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
                            <!-- <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div> -->
                            <!-- <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div> -->
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
                            <!-- <li class="active"><a href="./index.html">Home</a></li>
                            <li><a href="./shop-grid.html">Shop</a></li>
                            <li><a href="#">Pages</a> -->
                                <ul class="header__menu__dropdown">
                                    <!-- <li><a href="./shop-details.html">Shop Details</a></li> -->
                                    <!-- <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li> -->
                                    <!-- <li><a href="./blog-details.html">Blog Details</a></li> -->
                                </ul>
                            </li>
                            <!-- <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li> -->
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>0</span></a></li>
                            <li><a href="<?php echo $link; ?>"><i class="fa fa-shopping-bag"></i><span>
                                <?php
                                if(empty($_SESSION['id'])){
                                    echo 0;
                                }
                                else{
                                countCart($_SESSION['id'],0);
                            }
                                ?>
                            </span></a></li>
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
                            <span>All Categories</span>
                        </div>
                        <ul>
                            <li><a href="vegMelons.php">Vegetables & melons</a></li>
                            <li><a href="cereals.php">Cereals</a></li>
                            <li><a href="fruitNuts.php">Fruit & Nuts</a></li>
                            <li><a href="legumes.php">Leguminous Crops</a></li>
                            <li><a href="sugars.php">Sugar crops</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="crop_search.php" method="GET" role="search">
                                <input type="text" name="search" placeholder="I am looking for.....">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    
    <!-- Categories Section Begin -->
    <section class="featured spad">
                        
        <div class="container try">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="section-title">
                        <h2>Recently Added</h2>
                    </div>
                    
                    <div class="row style=size:10px;">
                        
                        <div class="categories__slider owl-carousel style=size:10px;">
                        <?php
                            $p_list = get_all_croprecords_ctr();
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
                            <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                                
                                <!-- <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg"> -->
                                    <a href="single_page.php?crop_id=<?php echo($apat['crop_id'])?>">
                                        <div class="featured__item__pics categories__item set-bg set-bg" data-setbg='../images/crops/<?php echo $apat["crop_image"] ?>'>
                                        </div>
                                        <div class="featured__item__texts">
                                            <h6><a href="#"><?php echo $cropname; ?></a></h6>
                                            <h5>GHc<?php echo $price; ?></h5>
                                        </div>
                                    </a>
                            </div>
                            <?php
                            }?>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
    </section>
    
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container try">
            <?php
                $p_list = get_all_croprecords_ctr();
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>All Products</h2>
                    </div>
                </div>
            </div>
              
            <div class="row featured__filter">
            <?php
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
                                            <input type="hidden" name="qty" value="1">
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

    </section>
    <!-- Featured Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.php"><img src="../images/logo.png" alt=""></a>
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
            
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  
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