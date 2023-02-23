<?php
require("../controllers/cart_controller.php");
require("../settings/core.php");

if (isset($_GET['crop_id'])) {
    $cid = $_SESSION["customer_id"];
    $pid = $_GET['crop_id'];
    // print_r($pid);
    // exit();
    // echo $id;
    $result = delete_cart_record_ctr($crpId,$custId);
    if ($result) {
        header('Location: ../Ecom/cart.php');
    } else {
        echo 'error';
    }
}

?>
