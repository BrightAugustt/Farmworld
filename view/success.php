<?php
include("../settings/core.php");
require("../controllers/product_controller.php");
require('../function/cart_function.php');
?>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
</head>
<style>
    body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
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

<body>
    <div class="card">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <i class="checkmark">✓</i>
        </div>
        <h1>Success</h1>
        <p>We received your purchase request;<br /> we'll be in touch shortly!</p>
    </div>
</body>
<footer>
    <div class="row featured__filter">
        <?php
        foreach ($p_list as $apat) {
            $p_list = get_all_croprecords_ctr();
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
</footer>

</html>