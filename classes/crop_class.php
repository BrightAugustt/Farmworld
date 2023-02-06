<?php
include_once(dirname(__FILE__)) . "../../settings/db_class.php";


class CropClass extends db_connection
{
    // Insert crop into database
    function add_crop($crop_name,$farmer_name,$farm_size,$qty,$crop_price,$crop_image,$crop_cat,$crop_desc)
    {
        // return true or false
        return $this->db_query(
            "INSERT INTO crops (`crop_name`,`farmer_name`,`farm_size`,`qty`,`crop_price`,`crop_image`,`crop_cat`,`crop_desc`) VALUES ('$crop_name','$farmer_name','$farm_size','$qty','$crop_price','$crop_image','$crop_cat','$crop_desc')"
        );
    }

    // select one
    function selectOne_crop($crop_id)
    {
        // return true or false
        return $this->db_query(
            "SELECT * FROM `crops` where crop_id=$crop_id"
        );
    }

    // select all crops
    function selectAll_crop($crop_id)
    {
        // return true or false
        return $this->db_fetch_all(
            "SELECT * FROM `crops`"
        );
    }

    // update crop
    function update_crop($crop_id,$crop_name,$farmer_name,$farm_size,$qty,$crop_price,$crop_image,$crop_cat,$crop_desc)
    {
        // return true or false
        return $this->db_query(
            "UPDATE `crops` SET `crop_name`='$crop_name',`farmer_name`='$farmer_name',`farm_size`='$farm_size',`qty`='$qty',`crop_price`='$crop_price',`crop_image`='$crop_image',`crop_cat`='$crop_cat',`crop_desc`='$crop_desc' WHERE crop_id=$crop_id"
        );
    }

    // delete crop
    function delete_crop($crop_id)
    {
        // return true or false
        return $this->db_query(
            "DELETE FROM `crops` WHERE `crop_id`='$crop_id'"
        );
    }


    // search crop
    



    
}



?>