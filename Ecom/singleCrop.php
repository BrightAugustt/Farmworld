<?php
include("../controllers/product_controller.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css rel="stylesheet">
    <!-- <link rel="stylesheet" href="../css/product_card.css"> -->
    <!-- <link rel="stylesheet" href="../css/search.css"> -->
</head>

<?php require("./header.php"); ?>

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



<div class="container-fluid mt-5 justify-content-center align-items-center" style="width: 18rem ;">
    <img src='../images/crops/<?php echo $apat['crop_image']; ?>' class="card-img-top" style="width: 200; height: 200;" alt="<?php echo $cropname; ?>">
    <div class="card-body">
        <h4 class="card-title"><?php echo $cropname; ?></h4>
        <h5 class="card-title">GHc<?php echo $cropprice; ?></h5>
        <p class="card-text"><?php echo $cdesc; ?></p>
    </div>
    <a class="btn btn-success" href="homepage.php" role="button">Go Back</a>
</div>

<?php require("./footer.php"); ?>

</html>