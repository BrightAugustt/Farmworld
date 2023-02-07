<?php
include_once '../controllers/crop_controller.php';

if(isset($_POST["deletecrop"])){
    $crop_id=$_POST["crop_id"];

    $result=deleteCrop_ctr($crop_id);
    if($result==true){
        header('Location:../aeo/view_crop.php');
    }else{
        echo"Couldn't delete";
    }
    }else{
        echo "Something went wrong";
}

?>