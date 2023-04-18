<?php

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

 function aeo_crop_count_ctr($cid){
    $addcust = new general_class();

    return $addcust->aeo_crop_count($cid);
 }

  function count_farmers_by_customer_ctr($cid){
    $countfarmer =new general_class();

    return $countfarmer -> count_farmers_by_customer($cid);
  }


?>