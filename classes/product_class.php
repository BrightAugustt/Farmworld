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

    // Select all crops
    function get_all_croprecords_cls()
    {
        // return true or false
        return $this->db_query(
            "SELECT crops.*, customer.customer_email 
            FROM crops 
            JOIN customer ON crops.customer_id = customer.customer_id 
            ORDER BY crops.crop_id DESC"
        );
    }

// Show all crops
    function showall_crops(){
        $sql = "SELECT crops.*, customer.customer_email FROM crops JOIN customer ON crops.customer_id = customer.customer_id WHERE `Approved`='Yes' ORDER BY crops.crop_id DESC;";
    }

// Updates the status of the crop to change the approved value
    function updatestatus_crops($crop_id,$status)
    {
        // return true or false
        return $this->db_query(
            "UPDATE `crops` set `Approved`='$status' where `crop_id`='$crop_id'"
        );
    }



    function get_all_officercrop_cls($customer_id)
    {
        // return true or false
        return $this->db_query(
            "SELECT * from crops WHERE `customer_id`='$customer_id'"
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


     function get_one_croprecord_cls($cid)
    {
        // return true or false
        return $this->db_query(
            "SELECT * from crops where crop_id ='$cid'"
        );
    }

    function search_for_one_crop_cls($searchkeys){
		$sql= "SELECT `crop_id`, `crop_name`, `farmer_name`, `qty`, `crop_price`, `crop_desc`, `crop_cat`, `crop_image` FROM crops WHERE `crop_desc` LIKE '%$searchkeys%' or `crop_name` LIKE '$searchkeys'or `crop_cat` LIKE '$searchkeys'";
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

    function getEmailSender($email){
        $sql = "SELECT `customer_email` FROM `customer` 
        JOIN entries ON customer.customer_id = entries.customer_id
        WHERE entries.entry_id = $email";
    }

    function admincropshow(){
        $sql = "SELECT crops.*, customer.customer_email 
        FROM crops 
        JOIN customer ON crops.customer_id = customer.customer_id 
        ORDER BY crops.crop_id DESC";
    }

  





}
?>