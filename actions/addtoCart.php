<?php
require ('../settings/core.php');
require ('../controllers/product_controller.php');
require ('../controllers/cart_controller.php');

check_login();

// // Get the product ID and user ID from the request
// $product_id = $_POST['product_id'];
// $user_id = $_SESSION['user_id'];

// // Check if the product is already in the cart for this user
// $query = "SELECT quantity FROM cart WHERE user_id = $user_id AND product_id = $product_id";
// $result = mysqli_query($conn, $query);
// $row = mysqli_fetch_assoc($result);

// if ($row) {
//   // Product is already in cart, so update the quantity
//   $new_quantity = $row['quantity'] + 1;
//   $query = "UPDATE cart SET quantity = $new_quantity WHERE user_id = $user_id AND product_id = $product_id";
//   mysqli_query($conn, $query);
// } else {
//   // Product is not in cart, so insert a new row
//   $query = "INSERT INTO cart (user_id, product_id, quantity) VALUES ($user_id, $product_id, 1)";
//   mysqli_query($conn, $query);
// }


if (isset($_POST['addcart'])) {
    $ip_address = $_SERVER["REMOTE_ADDR"];
    $prodId = $_POST['crop_id'];
    $custId = $_SESSION['customer_id'];
    $qty = $_POST['qty'];

    // print_r($ip_address);
    // print_r($prodId);
    // print_r($custId);
    // print_r($qty);
    // exit();

    // call function to check if the user has added an item to the cart.
    $duplicate_check = dup_cart_qty_ctr($prodId, $custId);

    // check if there is no input else add to cart.
    if ($duplicate_check == false) {
        $addCart = add_to_cart_ctr($prodId, $ip_address, $custId, $qty);
        if ($addCart) {
            header('Location: ../Ecom/homepage.php');
        } else {
            echo "Failed insertion!";
        }
     } else {
        $update_check = update_cart_qty_ctr($prodId, $custId, $qty);
        if ($update_check) {
            // if update was succesfull, redirect to cart page.
            header('location:../Ecom/cart.php');
        } else {
            echo "Failed Update!";
        }
    }
}
?>