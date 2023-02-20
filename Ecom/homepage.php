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
    <link rel="stylesheet" href="home.css">

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

<body class="vh-100 vw-100">

    <?php require("./header.php"); ?>

    <!-- create filter section -->

    <body>
        <section">
            <div class="w-100 h-50" style="background: linear-gradient(160.29deg,#00b53f .67%,#00831e 100.93%)">
                <div style="display:flex; flex-direction:column; justify-content:space-around; height:100%">
                    <div class="row height d-flex justify-content-center align-items-center ">
                        <div style="display: flex; flex-direction:row; width:100%; justify-content:center;margin-bottom:-150px;">
                            <span class=" mb-5" style="color:white; text-align:center"> Find any crop in...
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="success" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                </svg>
                            </span>
                            <form method="post" action="../controllers/region-controller.php">
                                <select class="form-select" aria-label="Disabled select example" name="region">
                                    <option value="Greater Accra">Greater Accra</option>
                                    <option value="Eastern">Eastern</option>
                                </select>
                                <button class="btn btn-outline-light" type="submit">Go</button>
                            </form>
                        </div>
                    </div>
                    <div class="row height d-flex  search">

                        <nav class="navbar  col-md-11 ">
                            <div class="container-fluid justify-content-center align-items-center">
                                <!-- <img src="../images/Farm-removebg.png" class="img" alt=""> -->
                                <form action="crop_search_result.php" method="GET" class="d-flex find" role="search">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <input class="form-control me-2" name="search" placeholder=" I am looking for... " aria-label="Search">
                                    <button class="btn btn-outline-light" type="submit">Search</button>
                                </form>
                                <!-- <img src="../images/Farm-removebg.png" class="img" alt=""> -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            </section>

            <main>
                <div class="container mt-4">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="container">
                                    <div class="card-header">
                                        <h4>All Crops</h4>
                                        <div class="text-end">
                                            <a href=""><button type="button" class="btn btn-outline-dark">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
                                                        <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z" />
                                                    </svg>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
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
                                                    $cropcat = $apat['crop_cat'];
                                                    $qtyavail = $apat['qty'];
                                                    $price = $apat['crop_price'];
                                                    $desc = $apat['crop_desc'];
                                                    //Displaying image
                                                    $pimage = ("<img src='{$apat['crop_image']}'. height=200 width=200 ");
                                                ?>



                                                    <div class="card" style="width: 18rem">
                                                        <div class="card-block">
                                                            <img src='../images/crops/<?php echo $apat["crop_image"] ?>' class="img-fluid card-img-top" style="width: 200; height: 200;" alt="<?php echo $pname; ?>">
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
                                    <div class="p-4">
                                        <h5 class="fst-italic">Crop Categories</h5>
                                        <ol class="list-unstyled mb-0">
                                            <li><a href="vegAccra.php">Vegetables</a></li>
                                            <li><a href="cerAccra.php">Cereal</a></li>
                                            <li><a href="fruAccra.php">Fruits</a></li>
                                            <li><a href="legAccra.php">Legumes</a></li>
                                            <li><a href="spiAccra.php">Spices</a></li>
                                        </ol>
                                    </div>

                                    <!-- <div class="p-4">
                                        <h4 class="fst-italic">Elsewhere</h4>
                                        <ol class="list-unstyled">
                                            <li><a href="#">GitHub</a></li>
                                            <li><a href="#">Twitter</a></li>
                                            <li><a href="#">Facebook</a></li>
                                        </ol>
                                    </div> -->
                                </div>
                            </div>
                    </div>
                </div>
                </div>
            </main>
    </body>
    <?php require("./footer.php"); ?>

</html>