<?php require("../controllers/product_controller.php");

$customer_id = isset($_SESSION['customer_id']) ? $_SESSION['customer_id'] : "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>

<body>
    <div class="b-example-divider"></div>

    <!--Header of Page-->
    <header class="p-3 mb-2 bg-success text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img class="bi me-2" src="../images/logo.png" width="200" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                    </img>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="../Views/homepage.php" class="nav-link px-2 text-dark">Home</a></li>
                    <li><a href="../Views/about.php" class="nav-link px-2 text-white">About</a></li>
                    <li><a href="../Views/shop.php" class="nav-link px-2 text-white">Shop</a></li>
                    <li><a href="../Views/contactUs.php" class="nav-link px-2 text-white">Contact Us</a></li>
                </ul>

                <div class="text-end">
                    <a href="../Views/cart.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </a>
                    <a href="../login/logout.php"><button type="button" class="btn btn-outline-light me-2">Logout</button></a>
                </div>
            </div>
        </div>
    </header>

    <body>
        <div class="container">
            <div class="row height d-flex justify-content-center align-items-center ">
                <span class="col-md-3 mb-5"> Find any crop in...
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="success" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                        </svg>
                        Greater Accra
                    </a>
                </span>
            </div>
            <div class="row height d-flex justify-content-center align-items-center">
                <nav class="navbar bg-light col-md-8 ">
                    <div class="container-fluid justify-content-center align-items-center">
                        <form action="crop_search_result.php" method="GET" class="d-flex" role="search">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input class="form-control me-2" name="search" placeholder=" I am looking for... " aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>

        <main>
            <div class="container mt-4">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="container">
                            </div>
                            <div class="card-header">
                                <h4>All Crops</h4>
                            </div>

                            <?php
                            $p_list = get_all_croprecords_ctr();
                            //print_r($brand_list);
                            ?>
                            <div class="container">
                                <div class="card-deck">
                                    <div class="card align-items-center">
                                        <div class="row row-cols-1 row-cols-md-3 g-4 px-5 mx-5">
                                            <?php
                                            //  var_dump($p_list);
                                            foreach ($p_list as $apat) {

                                                // print_r($apat);

                                                $cropname = $apat['crop_name'];
                                                $cropcat = $apat['crop_brand'];
                                                $qtyavail = $apat['qty'];
                                                $price = $apat['crop_price'];
                                                $desc = $apat['crop_desc'];
                                                //Displaying image
                                                $pimage = ("<img src='{$apat['crop_image']}'. height=200 width=200 ");
                                            ?>



                                                <div class="card" style="width: 18rem">
                                                    <div class="card-block">
                                                        <img src='../images/cropImages/<?php echo $apat["crop_image"] ?>' class="img-fluid card-img-top" style="width: 200; height: 200;" alt="<?php echo $pname; ?>">
                                                        <div class="card-body">
                                                            <h4 class="card-title"><?php echo $cropname; ?></h4>
                                                            <h5 class="card-title">GHc<?php echo $price; ?></h5>
                                                            <p class="card-text"><?php echo $desc; ?></p>
                                                            <form action="#" method="GET">
                                                                <input type="hidden" name="crop_id" value="<?php echo $apat['crop_id'] ?>">
                                                                <button type="submit" name="view" class="btn btn-primary">View</button>
                                                            </form>
                                                            <!-- <br> -->
                                                            <form action="../actions/addtoCart.php" method="POST">
                                                                <input type="hidden" name="crop_id" value="<?php echo $apat['crop_id'] ?>">
                                                                <input type="hidden" name="qty" value="1">
                                                                <button type="submit" name="addcart" class="btn btn-success my-3">Add To Cart <i class="fas fa-shopping-cart"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Bar on the side and picture on top like jiji -->
            <div class="row g-5">
                <div class="col-md-8">
                    <h3 class="pb-4 mb-4 fst-italic border-bottom">
                        <div class="col-md-4">
                            <div class="position-sticky" style="top: 2rem;">
                                <!-- <div class="p-4 mb-3 bg-light rounded">
                                    <h4 class="fst-italic">About</h4>
                                    <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
                                </div> -->

                                <div class="p-4">
                                    <h4 class="fst-italic">Crops</h4>
                                    <ol class="list-unstyled mb-0">
                                        <li><a href="#">March 2021</a></li>
                                        <li><a href="#">February 2021</a></li>
                                        <li><a href="#">January 2021</a></li>
                                        <li><a href="#">December 2020</a></li>
                                        <li><a href="#">November 2020</a></li>
                                        <li><a href="#">October 2020</a></li>
                                        <li><a href="#">September 2020</a></li>
                                        <li><a href="#">August 2020</a></li>
                                        <li><a href="#">July 2020</a></li>
                                        <li><a href="#">June 2020</a></li>
                                        <li><a href="#">May 2020</a></li>
                                        <li><a href="#">April 2020</a></li>
                                    </ol>
                                </div>

                                <div class="p-4">
                                    <h4 class="fst-italic">Elsewhere</h4>
                                    <ol class="list-unstyled">
                                        <li><a href="#">GitHub</a></li>
                                        <li><a href="#">Twitter</a></li>
                                        <li><a href="#">Facebook</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            </div>
        </main>
    </body>
    <footer>
        <div class="container">
            <footer class="py-5">
                <div class="row">
                    <div class="col-2">
                        <h4>Navigation</h4>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="../index.php" class="nav-link p-0 text-muted">Home</a></li>
                            <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-muted">About</a></li>
                            <li class="nav-item mb-2"><a href="shop.php" class="nav-link p-0 text-muted">Shop</a></li>
                            <li class="nav-item mb-2"><a href="contactUs.php" class="nav-link p-0 text-muted">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <h4>Contact Us</h4>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="mailto:neanama@gmail.com" class="nav-link p-0 text-muted">neanama@gmail.com</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tel: (+233) 24 426 2700</a></li>
                            <li class="nav-item mb-2"><a href="http://v6.ashesi.edu.gh/about/contact-us.html" class="nav-link p-0 text-muted">Location: Dansoman, <br> Accra-Ghana</a></li>
                        </ul>
                    </div>

                    <div class="col-4 offset-4">
                        <form action="../actions/newsLet.php" method="POST">
                            <h4>Subscribe to our newsletter</h4>
                            <p>Monthly digest of whats new and exciting from us.</p>
                            <div class="d-flex w-90 gap-2">
                                <label for="news_email" class="visually-hidden">Email address</label>
                                <input id="news_email" type="text" name="news_email" class="form-control" placeholder="Email address">
                                <button class="btn btn-primary" name="email" type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-flex justify-content-between py-4 my-4 border-top">
                    <p>&copy; 2022 Company, Inc. All rights reserved.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-dark" href="https://twitter.com"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#twitter" />
                                </svg></a></li>
                        <li class="ms-3"><a class="link-dark" href="https://instagram.com"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#instagram" />
                                </svg></a></li>
                        <li class="ms-3"><a class="link-dark" href="https://facebook.com"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#meta" />
                                </svg></a></li>
                    </ul>
                </div>
            </footer>
        </div>


        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    </footer>

</html>