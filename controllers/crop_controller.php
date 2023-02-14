<?php
//connect to the user account class
include_once(dirname(__FILE__)) . '/../classes/crop_class.php';


function addCrop_ctr($crop_name,$farmer_name,$farmer_contact,$farm_size,$qty,$crop_price,$crop_image,$crop_cat,$crop_desc)
{
    // create an instance of the crop class
    $add_crop = new crop_class();

    return $add_crop->add_crop($crop_name,$farmer_name,$farmer_contact,$farm_size,$qty,$crop_price,$crop_image,$crop_cat,$crop_desc);
}

function updateCrop_ctr($crop_id,$crop_name,$farmer_name,$farm_size,$qty,$crop_price,$crop_image,$crop_cat,$crop_desc)
{
    // create an instance of the crop class
    $update_crop = new crop_class();

    return $update_crop->update_crop($crop_id,$crop_name,$farmer_name,$farm_size,$qty,$crop_price,$crop_image,$crop_cat,$crop_desc);
}

function selectallCrop_ctr()
{
    // create an instance of the crop class
    $selectall = new crop_class();

    return $selectall->selectAll_crop();
}

function selectoneCrop_ctr($crop_id)
{
    // create an instance of the crop class
    $selectone = new crop_class();

    return $selectone->selectOne_crop($crop_id);
}

function deleteCrop_ctr($crop_id)
{
    // create an instance of the crop class
    $delete = new crop_class();

    return $delete->delete_crop($crop_id);
}


























?>