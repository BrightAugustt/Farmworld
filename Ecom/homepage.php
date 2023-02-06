<?php require("../controllers/product_controller.php"); 

$customer_id = isset($_SESSION['customer_id'])? $_SESSION['customer_id']: "";

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
            <div class="row height d-flex justify-content-center align-items-center">
                <nav class="navbar bg-light col-md-8 ">
                    <div class="container-fluid justify-content-center align-items-center">
                        <form action="product_search_result.php" method="GET" class="d-flex" role="search">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input class="form-control me-2" name="search" placeholder=" Search " aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Products</h4>
                        </div>

                        <?php
                        $p_list = get_all_productrecords_ctr();
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
                                            
                                            $pnamee = $apat['product_cat'];
                                            $pbrand = $apat['product_brand'];
                                            $pname = $apat['product_title'];
                                            $pprice = $apat['product_price'];
                                            $pdesc = $apat['product_desc'];
                                            //Displaying image
                                            $pimage = ("<img src='{$apat['product_image']}'. height=200 width=200 ");
                                        ?>



                                            <div class="card" style="width: 18rem">
                                                <div class="card-block">
                                                    <img src='../images/productImages/<?php echo $apat["product_image"] ?>' class="img-fluid card-img-top" style="width: 200; height: 200;" alt="<?php echo $pname; ?>">
                                                    <div class="card-body">
                                                        <h4 class="card-title"><?php echo $pname; ?></h4>
                                                        <h5 class="card-title">GHc<?php echo $pprice; ?></h5>
                                                        <p class="card-text"><?php echo $pdesc; ?></p>
                                                        <form action="singleProduct.php" method="GET">
                                                            <input type="hidden" name="product_id" value="<?php echo $apat['product_id'] ?>">
                                                            <button type="submit" name="view" class="btn btn-primary">View</button>
                                                        </form>
                                                        <!-- <br> -->
                                                        <form action="../Actions/addCart.php" method="POST">
                                                            <input type="hidden" name="product_id" value="<?php echo $apat['product_id'] ?>">
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
    </body>

</html>