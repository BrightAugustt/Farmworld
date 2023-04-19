<?php
require ('../settings/core.php');
// require ('../controllers/product_controller.php');
require ('../controllers/cart_controller.php');

check_login();


if (isset($_POST['addcart'])) {
    $ip_address = $_SERVER["REMOTE_ADDR"];
    $prodId = $_POST['crop_id'];
    $custId = $_SESSION['customer_id'];
    $qty = $_POST['qty'];

    if(isset($_SESSION['customer_id'])){
        $custId=$_SESSION['customer_id'];
        $addCart=add_to_cart_ctr($prodId, $ip_address, $custId, $qty);
        if($addCart == True){
            header('Location:../view/index.php');
        }else{
            echo"Failed insertion!";
        }

    }else{
        if(!isset($_SESSION['cart'])){
            $_SESSION['cart']=array();
        }
        $item = array(
            'crop_id'=>$prodId,
            'qty'=>$qty
        );
    }
    array_push($_SESSION['cart'],$item);
    header('Location:../view/index.php');

    // $addCart=add_to_cart_ctr($prodId, $ip_address, $custId, $qty);
    // if($addCart == True){
    //     header('Location:../view/index.php');
    // }
}

// if (isset($_POST['addcart'])) {
//     $ip_address = $_SERVER["REMOTE_ADDR"];
//     $prodId = $_POST['crop_id'];
//     $custId = $_SESSION['customer_id'];
//     $qty = $_POST['qty'];

//     $addCart=add_to_cart_ctr($prodId, $ip_address, $custId, $qty);
//     if($addCart == True){
//         header('Location:../view/index.php');
//     }
// }

if (isset($_POST['addtocart'])) {
    $ip_address = $_SERVER["REMOTE_ADDR"];
    $prodId = $_POST['crop_id'];
    $custId = $_SESSION['customer_id'];
    $qty = $_POST['qty'];

    $addCart=add_to_cart_ctr($prodId, $ip_address, $custId, $qty);
    if($addCart == True){
        header('Location:../view/singleCrop.php');
    }
}



?>