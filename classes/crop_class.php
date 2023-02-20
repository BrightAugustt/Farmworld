<?php
//connect to database class
include_once(dirname(__FILE__))  . '../../settings/db_class.php';

class crop_class extends db_connection
{

    function add_catrecord_cls($catname)
    {
        // return true or false
        return $this->db_query(
            "INSERT INTO categories (cat_name) values ('$catname')"
        );
    }

    function add_croprecord_cls($cropName, $farmerName, $qty, $price, $category, $file, $cdesc)
    {
        // return true or false
        return $this->db_query(
            "INSERT INTO crops (`crop_name`, `farmer_name`, `qty`, `crop_price`, `crop_cat`, `crop_image`, `crop_desc`) VALUES ('$cropName', '$farmerName', '$qty', '$price', '$category', '$file', '$cdesc')"
        );
    }

    function get_all_croprecords_cls()
    {
        // return true or false
        return $this->db_query(
            "SELECT * from crops"
        );
    }

    function get_all_catrecords_cls()
    {
        // return true or false
        
        return $this->db_query(
            "SELECT * from categories"
        );
    }

    function get_all_orderrecords_cls()
    {
        // return true or false
        
        return $this->db_query(
            "SELECT * from orders"
        );
    }


     function get_one_croprecord_cls($pid)
    {
        // return true or false
        return $this->db_query(
            "SELECT * from crops where crop_id ='$pid'"
        );
    }

    function search_for_one_crop_cls($searchkeys){
		$sql= "SELECT `crop_id`, `crop_cat`, `crop_brand`, `crop_title`, `crop_price`, `crop_desc`, `crop_image`, `crop_keywords` FROM crops WHERE `crop_keywords` LIKE '%$searchkeys%' or `crop_title` LIKE '$searchkeys'";
		return $this->fetch($sql);
	}

    function get_one_catrecord_cls($cid)
    {
        // return true or false
        return $this->db_query(
            "SELECT * from categories where cat_id ='$cid'"
        );
    } 

    function update_catrecord_cls($id, $name)
    {
        // return true or false
        return $this->db_query(
            "UPDATE `categories` SET `cat_name`='$name' WHERE `cat_id`='$id'"
        );
    }

    function update_cartrecord_cls($pid, $cid, $qty)
    {
        // return true or false
        return $this->db_query(
            "UPDATE `cart` SET `p_id`='$pid',`qty`='$qty' WHERE `c_id`='$cid'"
        );
    }

    function update_croprecord_cls($pid, $pcategory, $pbrand, $ptitle, $pprice, $pdesc, $pimage, $pkeywords)
    {
        // return true or false
        return $this->db_query(
            "UPDATE `crops` SET `crop_cat`='$pcategory',`crop_brand`='$pbrand',`crop_title`='$ptitle', `crop_price`='$pprice',`crop_desc`='$pdesc', `crop_image`='$pimage',`crop_keywords`='$pkeywords' WHERE `crop_id`='$pid'"
        );
    }

    function delete_croprecord_cls($id)
    {
        // return true or false
        return $this->db_query(
            "DELETE FROM `crops` WHERE `crop_id`='$id'"
        );
    }

    function delete_catrecord_cls($id)
    {
        // return true or false
        return $this->db_query(
            "DELETE FROM `categories` WHERE `cat_id`='$id'"
        );
    }

    function delete_cartrecord_cls($pid)
    {
        // return true or false
        return $this->db_query(
            "DELETE FROM `cart` WHERE `p_id`='$pid'"
        );
    }

    function delete_orderrecord_cls($oid)
    {
        // return true or false
        return $this->db_query(
            "DELETE FROM `orders` WHERE `order_id`='$oid'"
        );
    }
}
?>


<!-- include_once(dirname(__FILE__)) . "../../settings/db_class.php";


class crop_class extends db_connection
{
    // Insert crop into database
    function add_crop($crop_name,$crop_cat,$farmer_name,$farmer_contact,$farm_size,$qty,$crop_price,$crop_image,$crop_desc)
    {
      
        // Write query
		$sql = "INSERT INTO `crops`( `crop_name`,`crop_cat`,`farmer_name`, `farmer_contact`,`farm_size`, `qty`, `crop_price`, `crop_image`,`crop_desc`) VALUES ('$crop_name','$crop_cat','$farmer_name','$farmer_contact','$farm_size','$qty','$crop_price','$crop_image','$crop_desc')";
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

    // function selectAll_crops()
    // {
    //     $sql = "SELECT * FROM `crops`";
    //     // return true or false
    //     return $this->fetch($sql);
    // }

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


    // search crop




    
} -->
