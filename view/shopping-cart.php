<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Farmaworld/cart</title>

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
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <!-- Php code to take the total cart will be here -->
                <li><a href="shopping-cart.php"><i class="fa fa-shopping-bag"></i>
                        <!-- Cart Total: 2 --></span></a></li>
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
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
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
                            <li><a href="vegMelons.php">Vegetables & Melons</a></li>
                            <li><a href="cereals.php">Cereals</a></li>
                            <li><a href="fruitNuts.php">Fruit & Nuts</a></li>
                            <li><a href="legumes.php">Leguminous Crops</a></li>
                            <li><a href="sugars.php">Sugar Crops</a></li>
                        </ul>
                    </div>
                </div>

                <!-- <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <!-- <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form> -->
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
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/cart/cart-1.jpg" alt="">
                                        <h5>Vegetable’s Package</h5>
                                        <!-- <div class="remove">
                                            <button class="removebutton"> Remove</button>
                                            <p>$55.00</p>
                                        </div> -->

                                    </td>
                                    <td class="shoping__cart__price">
                                    GH₵ 55.00
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                    GH₵ 110.00
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/cart/cart-2.jpg" alt="">
                                        <h5>Fresh Garden Vegetable</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    GH₵ 39.00
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                    GH₵ 39.99
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close"></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/cart/cart-3.jpg" alt="">
                                        <h5>Organic Bananas</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    GH₵ 69.00
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                    GH₵ 69.99
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <button class="removebutton"><span><i class="fa fa-trash-o"></i></span></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span>GH₵ 454.98</span></li>
                            <li>Total <span>GH₵ 454.98</span></li>
                        </ul>
                        <a href="checkout.html" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="index.html" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->



    <!-- Available Products Section Start -->



    <!-- Available Products Section End -->

    <!-- Categories Section Begin -->
    <section class="featureds spad">
        <div class="container try">
            <div class="row">
                <div class="col-lg-12">
                    <div class="like">
                        <h2>You may also like</h2>
                    </div>
                    <div class="row style=size:10px;">
                        <div class="categories__slider owl-carousel style=size:10px;">
                            <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                                <!-- <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg"> -->
                                <a href="single_page.php">
                                    <div class="featured__item__pics categories__item set-bg set-bg" data-setbg="img/featured/feature-2.jpg">
                                    </div>
                                    <div class="featured__item__texts">
                                        <h6><a href="#">Crab Pool Security</a></h6>
                                        <h5>GHC30.00</h5>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                                <!-- <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg"> -->
                                <a href="single_page.php">
                                    <div class="featured__item__pics categories__item set-bg set-bg" data-setbg="img/featured/feature-2.jpg">
                                    </div>
                                    <div class="featured__item__texts">
                                        <h6><a href="#">Crab Pool Security</a></h6>
                                        <h5>GHC30.00</h5>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                                <!-- <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg"> -->
                                <a href="single_page.php">
                                    <div class="featured__item__pics categories__item set-bg set-bg" data-setbg="img/featured/feature-2.jpg">
                                    </div>
                                    <div class="featured__item__texts">
                                        <h6><a href="#">Crab Pool Security</a></h6>
                                        <h5>GHC30.00</h5>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                                <!-- <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg"> -->
                                <a href="single_page.php">
                                    <div class="featured__item__pics categories__item set-bg set-bg" data-setbg="img/featured/feature-2.jpg">
                                    </div>
                                    <div class="featured__item__texts">
                                        <h6><a href="#">Crab Pool Security</a></h6>
                                        <h5>GHC30.00</h5>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                                <!-- <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg"> -->
                                <a href="single_page.php">
                                    <div class="featured__item__pics categories__item set-bg set-bg" data-setbg="img/featured/feature-2.jpg">
                                    </div>
                                    <div class="featured__item__texts">
                                        <h6><a href="#">Crab Pool Security</a></h6>
                                        <h5>GHC30.00</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">Oranges</li>
                            <li data-filter=".fresh-meat">Fresh Meat</li>
                            <li data-filter=".vegetables">Vegetables</li>
                            <li data-filter=".fastfood">Fastfood</li>
                        </ul>
                    </div> -->
            </div>
        </div>
        <div class="row featured__filter">

            <div>

            </div>

    </section>
    <!-- Categories Section End -->

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