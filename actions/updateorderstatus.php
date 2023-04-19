<?php
//making action  aware of controller
include("../controllers/cart_controller.php");

//collect form data
if (isset($_POST['check'])) {

    $order_id=$_POST['order_id'];
    $fstatus=$_POST['check'];
    $status;
    // var_dump($crop_id,$fstatus);
    if($fstatus == 'Yes'){
        $status='No';
    }else{
        $status='Yes';
    }

    if(update_orderstatus_ctr($order_id,$status) == True){
        header('Location:../admin/allProducts.php');
    }
}



?>