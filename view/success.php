<?php
// session_start();
include("../settings/core.php");
require("../controllers/product_controller.php");
require('../function/cart_function.php');
// $customer_id = isset($_SESSION['customer_id']) ? $_SESSION['customer_id'] : "";
// $customer_id = $_SESSION['customer_id'];
$link;
$linkdash;
$link = "../view/shopping-cart.php";
$linkdash = "../dash/dashboard.php";
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

    <style>
        body {
            text-align: center;
            padding: 40px 0;
            background: #FFFFFF;
        }

        h1 {
            color: #88B04B;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
            font-weight: 900;
            font-size: 40px;
            margin-bottom: 10px;
        }

        p {
            color: #404F5E;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
            font-size: 20px;
            margin: 0;
        }

        i {
            color: #9ABC66;
            font-size: 100px;
            line-height: 200px;
            margin-left: -15px;
        }

        .card {
            background: white;
            padding: 60px;
            border-radius: 4px;
            box-shadow: 0 2px 3px #C8D0D8;
            display: inline-block;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    </header>
    <!-- Header Section End -->
    <br>
    <div class="card">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <i class="checkmark">✓</i>
        </div>
        <h1>Success</h1>
        <p>We received your purchase request;<br /> We'll be in touch shortly!</p>
    </div>
    <!-- Hero Section End -->


    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container try">
            <?php
            $p_list = get_all_croprecords_ctr();
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Other Products</h2>
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
                    $pimage = ("<img src='{$apat['crop_image']}'. height=100 width=100");

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
                        <div class="footer__copyright__text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

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

</html>