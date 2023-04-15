<?php
require ('../settings/core.php');
require ('../controllers/product_controller.php');
require ('../controllers/cart_controller.php');


// Get the quantity and product id from the ajax request
$qty = $_POST['qty'];
$product_id = $_POST['product_id'];

if (isset($_POST['updateBtn'])) {
    $ip_address = $_SERVER["REMOTE_ADDR"];
    $crpId = $_POST['crop_id'];
    $custId = $_SESSION['customer_id'];
    $qty = $_POST['qty'];

    update_cart_qty_ctr($crpId, $qty);
}

// Return the updated cart data as a JSON response
echo json_encode(array(
    'total_price' => $total_price
));

?>