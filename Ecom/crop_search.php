<?php
include("../controllers/product_controller.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/search.css">

    <title>Search List </title>
</head>

<body>
    <div class="b-example-divider"></div>   

    <?php require("./header.php"); ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Search Results
                            <a href="shop.php" class="btn btn-primary float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-md-3 g-4 px-5 mx-5">
                            <form method="POST" enctype="multipart/form-data">
                                <?php
                                $searchkeys = $_GET['search'];
                                $p_list = search_for_one_crop_ctr($searchkeys);
                                //print_r($brand_list);
                                foreach ($p_list as $apat) {
                                    $cropname = ($apat['crop_name']);
                                    $farmername = ($apat['farmer_name']);
                                    $qty = $apat['qty'];
                                    $cropprice = ($apat['crop_price']);
                                    $cdesc = ($apat['crop_desc']);
                                    $crop_cat = ($apat['crop_cat']);
                                ?>



                                    <div class="card">
                                        <img src='../images/crops/<?php echo $apat['crop_image']; ?>' class="card-img-top" width="100px" alt="<?php echo $cropname; ?>">
                                        <div class="card-body">
                                            <h4 class="card-title"><?php echo $cropname; ?></h4>
                                            <h5 class="card-title">GHc<?php echo $cropprice; ?></h5>
                                            <p class="card-text"><?php echo $cdesc; ?></p>
                                            <form action="searchResult.php" method="GET">
                                                <input type="hidden" name="crop_id" value="<?php echo $apat['crop_id'] ?>">
                                                <a href="singleCrop.php"></a><button type="submit" name="view" class="btn btn-primary">View</button>
                                            </form>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require("./footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>