<?php
include("../controllers/customer_controller.php");

if (isset($_POST['updateBtn'])) {
    $id = $_POST['customer_id'];
    $fname = $_POST['customer_fname'];
    $lname = $_POST['customer_lname'];
    $region = $_POST['customer_region'];
    $number = $_POST['customer_contact'];
    $email = $_POST['customer_email'];

    $result = update_custrecord_ctr($id,$fname, $lname, $number, $region, $email);
    if ($result) {
        header('Location: ../aeo/profile.php');
    } else {
        echo 'error';
    }
}

?>