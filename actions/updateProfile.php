<?php
// include("../controllers/contact_controller.php");

// if (isset($_POST['updateBtn'])) {
//     $id = $_POST['customer_id'];
//     $fname = $_POST['customer_fname'];
//     $lname = $_POST['customer_lname'];
//     $number = $_POST['customer_contact'];
//     $email = $_POST['customer_email'];

//     $result = update_custrecord_ctr($id,$fname, $lname, $number, $email);
//     if ($result) {
//         header('Location: ../aeo/profile.php');
//     } else {
//         echo 'error';
//     }
// }


include("../controllers/contact_controller.php");

if (isset($_POST['updateBtn'])) {
    $id = $_POST['customer_id'];
    $fname = $_POST['customer_fname'];
    $lname = $_POST['customer_lname'];
    $number = $_POST['customer_contact'];
    $email = $_POST['customer_email'];

    $result = update_custrecord_ctr($cid,$fname, $lname, $number, $email);
    if ($result) {
        // retrieve updated customer data from database
        $customer = get_one_record_ctr($cid);
        $customer_id = $customer['customer_id'];
        $customer_fname = $customer['customer_fname'];
        $customer_lname = $customer['customer_lname'];
        $customer_contact = $customer['customer_contact'];
        $customer_email = $customer['customer_email'];

        // display updated customer data on page
        echo '<h2>Customer Details Updated:</h2>';
        echo '<p>ID: ' . $customer_id . '</p>';
        echo '<p>First Name: ' . $customer_fname . '</p>';
        echo '<p>Last Name: ' . $customer_lname . '</p>';
        echo '<p>Contact Number: ' . $customer_contact . '</p>';
        echo '<p>Email: ' . $customer_email . '</p>';
    } else {
        echo 'error';
    }
}



?>