<?php
//start session
session_start(); 

//for header redirection
ob_start();

//funtion to check for login
function check_login(){
    if (!isset($_SESSION['customer_id'])) {
        header('location:../login/logout.php');
    }
}

function check_login_index(){
    if (!isset($_SESSION['customer_id'])) {
        header('location:../login/logout.php');
    }
}

//function to get user ID
function get_id(){
    if (isset($_SESSION['customer_id'])) {
    $id = $_SESSION['customer_id'];
   return $id;
 }
}

// //function to check for role (admin, customer, etc)
function check_aeo(){
    if ($_SESSION['user_role'] == 2) {
    return $_SESSION['user_role'];
    header('location: ../login/logout.php');
    }
}

// //function to check for role (admin, customer, etc)
function check_admin(){
    if ($_SESSION['user_role'] == 3) {
    return $_SESSION['user_role'];
    header('location: ../login/logout.php');
    }
}


?>