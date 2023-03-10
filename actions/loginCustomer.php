<?php


include("../controllers/contact_controller.php");

//for login
if (isset($_POST['loginButton'])) {

    $email = $_POST['customer_email'];
    $password = $_POST['customer_pass'];

    var_dump($email, $password);

    // Checking if email is in database. Retunns user data if it exists or false of it doesnt
    $result = getUserDetailsByEmail_ctr($email);

    // If the result if true
    if ($result) {
        // Get the user password from the array that is returned
        $user_password = $result['customer_pass'];
        // Verify the hash against the password entered
        $verify = password_verify($password, $user_password);
        // Compare if the user's input matches what is in the database. If true redirect to index page. if false echo failed.
        if ($verify) {
            $_SESSION['customer_email'] = $result['customer_email'];
            $_SESSION['customer_id'] = $result['customer_id'];
            $_SESSION['user_role'] = $result['user_role'];
            header("Location: ../Ecom/homepage.php");
            if ($_SESSION['user_role'] == 2) {
                header('location: ../aeo/aeo.php');
            } else if ($_SESSION['user_role'] == 3) {
                header('location: ../admin/admin.php');
            } else {
                header('location: ../Ecom/homepage.php');
            }
        } else {
            header("location: ../error/failLog.php");
        }
    } else {
        header("location: ../error/loginerror.php");
    }
}
