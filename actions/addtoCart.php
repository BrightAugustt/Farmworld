<?php
require ('../settings/core.php');
require ('../controllers/product_controller.php');
require ('../controllers/cart_controller.php');

check_login();

if (isset($_POST['addcart'])) {
    $ip_address = $_SERVER["REMOTE_ADDR"];
    $pid = $_POST['product_id'];
    $cid = $_SESSION['customer_id'];
    $qty = $_POST['qty'];

    // print_r($ip_address);
    // print_r($pid);
    // print_r($cid);
    // print_r($qty);
    // exit();

    // call function to check if the user has added an item to the cart.
    $duplicate_check = dup_cart_qty_ctr($pid, $cid);

    // check if there is no input else add to cart.
    if ($duplicate_check == false) {
        $addCart = add_to_cart_ctr($pid, $ip_address, $cid, $qty);
        if ($addCart) {
            header('Location: ../Views/shop.php');
        } else {
            echo "Failed insertion!";
        }
     } else {
        $update_check = update_cart_qty_ctr($pid, $cid, $qty);
        if ($update_check) {
            // if update was succesfull, redirect to cart page.
            header('location:../Views/cart.php');
        } else {
            echo "Failed Update!";
        }
    }
}
?>