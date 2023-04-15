<?php
require ('../settings/core.php');
require ('../controllers/product_controller.php');
require ('../controllers/cart_controller.php');


// Get the quantity and product id from the ajax request
$ip_address = $_SERVER["REMOTE_ADDR"];
$qty = $_POST['qty'];
$crpId = $_POST['crop_id'];

$update_query = update_cart_qty_ctr($crpId, $qty);
$update_stmt = $db->prepare($update_query);
$update_stmt->bindValue(':qty', $qty);
$update_stmt->bindValue(':crop_id', $crpId);
$update_stmt->bindValue(':customer_id', $_SESSION['customer_id']);
$update_stmt->execute();

$select_query = select_all_cart_ctr($ip_address,$custId);
$select_stmt = $db->prepare($select_query);
$select_stmt->bindValue(':customer_id', $_SESSION['customer_id']);
$select_stmt->execute();
$all_cartproducts = $select_stmt->fetchAll(PDO::FETCH_ASSOC);

$total_price = 0;

foreach ($all_cartproducts as $cart) {
    $total_price += $cart['qty'] * $cart['crop_price'];
}

// Return the updated cart data as a JSON response
echo json_encode(array(
    'cart_data' => $all_cartproducts,
    'total_price' => $total_price
));


?>