<?php
namespace App;
//connect to the user account class
include("../classes/general_class.php");

//sanitize data

function aeoCount_ctr(){

    // Create an instance of the class
    $verify_customer = new general_class();

     return $verify_customer->aeo_count();

}

function customerCount_ctr(){

    // Create an instance of the class
    $verify_customer = new general_class();

     return $verify_customer->customer_count();

}

function salesCount_ctr(){

    // Create an instance of the class
    $verify_customer = new general_class();

     return $verify_customer->sales_count();

}

function cropsCount_ctr(){

    // Create an instance of the class
    $verify_customer = new general_class();

     return $verify_customer->crops_count();

}


?>