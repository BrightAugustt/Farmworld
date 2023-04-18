<?php
include("../controllers/contact_controller.php");

if (isset($_POST['updateBtn'])) {
    $id = $_POST['customer_id'];
    $fname = $_POST['customer_fname'];
    $lname = $_POST['customer_lname'];
    $number = $_POST['customer_contact'];
    $email = $_POST['customer_email'];

    $result = update_custrecord_ctr($id,$fname, $lname, $number, $email);
    if ($result) {
        header('Location: ../aeo/profile.php');
    } else {
        echo 'error';
    }
}

?>