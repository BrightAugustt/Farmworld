
<?php
include_once(dirname(__FILE__)) . "../../settings/db_class.php";


class crop_class extends db_connection
{
    // Insert crop into database
    function add_crop($crop_name,$farmer_name,$farmer_contact,$farm_size,$qty,$crop_price,$crop_image,$crop_cat,$crop_desc)
    {
        // Write query
		$sql = "INSERT INTO `crops`( `crop_name`, `farmer_name`, `farmer_contact`, `farm_size`, `qty`, `crop_price`, `crop_image`, `crop_cat`, `crop_desc`) VALUES ('$crop_name','$farmer_name','$farmer_contact','$farm_size','$qty','$crop_price','$crop_image','$crop_cat','$crop_desc')";
		// Return  
		return $this -> db_query($sql);
    }

    function add_cat($catname)
    {
        // return true or false
        return $this->db_query(
            "INSERT INTO categories (cat_name) values ('$catname')"
        );
    }

    // select one
    function selectOne_crop($crop_id)
    {
        // return true or false
        return $this->db_query(
            "SELECT * FROM `crops` where `crop_id`='$crop_id'"
        );
    }

    // select all crops
    function selectAll_crop()
    {
        $sql = "SELECT * FROM `crops`";
		// Return
		return $this->db_fetch_all($sql);
    }

    // select all crop categories
    function selectAll_cat()
    {
        $sql = "SELECT * FROM `categories`";
        // Return
        return $this->db_fetch_all($sql);
    }
    

    // update crop
    function update_crop($crop_id,$crop_name,$farmer_name,$farmer_contact,$farm_size,$qty,$crop_price,$crop_image,$crop_cat,$crop_desc)
    {
        // return true or false
        return $this->db_query(
            "UPDATE `crops` SET `crop_name`='$crop_name',`farmer_name`='$farmer_name',`farmer_contact`='$farmer_contact',`farm_size`='$farm_size',`qty`='$qty',`crop_price`='$crop_price',`crop_image`='$crop_image',`crop_cat`='$crop_cat',`crop_desc`='$crop_desc' WHERE `crop_id`='$crop_id'"
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


    // show crop
    function show_all_crop()
    {
        $sql="SELECR * FROM `crops` where `Approved`='Yes'";
        return $this->db_fetch_all($sql);
    }

    function showUpdateCrop($id,$status){
        $sql="UPDATE  `crops` set Approved='$status' where `crop_id`='$id'";
        return $this->db_query($sql);
    }

    function update_crop_image($crop_id,$crop_image){
        $sql="UPDATE `crops` SET `crop_image`=$crop_image WHERE `crop_id`='$crop_id'";
        return $this->db_query($sql);
    }

}
?>