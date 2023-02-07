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
    $image = $_FILES['crop_image']["name"];
    $tmp = $_FILES['crop_image']["tmp_name"];

    $prevImage = $_POST['image'];
    function upload($directory,$subdir,$tempname,$image){

        $folder = "../$directory/$subdir/".$image;

        if(!file_exists("../$directory/$subdir/")){
            // Create a new directory if file does not exist
            @mkdir("../$directory/$subdir/",0777);
            // echo("New folder created");
            move_uploaded_file($tempname,$folder);
            return $folder;
        }else{
            move_uploaded_file($tempname,$folder);
            return $folder;
        }
        return false;
        }

        $crop_image=upload("Images","crop",$tmp,$image);
    
        $updatecrop=updatecrop_ctr($crop_id,$crop_name,$farmer_name,$farm_size,$qty,$crop_price,$crop_image,$crop_cat,$crop_desc);
    
       
            if($updatecrop== true){
                header('Location:../aeo/view_crop.php');
    
            }
    
    }else{
        echo "Something went wrong";
}



?>