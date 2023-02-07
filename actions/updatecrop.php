<?php
include_once '../controllers/crop_controller.php';

if(isset($_POST["updatecrop"])){

     // Variable to capture the name value for each user input.
    $crop_id=$_POST["crop_id"];
    $crop_name=$_POST["crop_name"];
    $farmer_name=$_POST["farmer_name"];
    $farm_size=$_POST["farm_size"];
    $qty=$_POST["qty"];
    $crop_price=$_POST["crop_price"];
    $crop_cat=$_POST["crop_cat"];
    $crop_desc=$_POST["crop_desc"];
}



?>