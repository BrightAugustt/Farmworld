<?php
//connect to database class
include_once(dirname(__FILE__)) . '../../settings/db_class.php';

class product_class extends db_connection
{

    function add_catrecord_cls($catname)
    {
        // return true or false
        return $this->db_query(
            "INSERT INTO categories (cat_name) values ('$catname')"
        );
    }

    function add_productrecord_cls($cropName, $farmerName, $ptitle, $pprice, $pdesc, $file, $pkeywords)
    {
        // return true or false
        return $this->db_query(
            "INSERT INTO crops (`crop_name`, `farmer_name`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES ('$pcategory', '$pbrand', '$ptitle', '$pprice','$pdesc', '$file', '$pkeywords')"
        );
    }

    function get_all_productrecords_cls()
    {
        // return true or false
        return $this->db_query(
            "SELECT * from products"
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


     function get_one_productrecord_cls($pid)
    {
        // return true or false
        return $this->db_query(
            "SELECT * from products where product_id ='$pid'"
        );
    }

    function search_for_one_product_cls($searchkeys){
		$sql= "SELECT `product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords` FROM products WHERE `product_keywords` LIKE '%$searchkeys%' or `product_title` LIKE '$searchkeys'";
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

    function update_productrecord_cls($pid, $pcategory, $pbrand, $ptitle, $pprice, $pdesc, $pimage, $pkeywords)
    {
        // return true or false
        return $this->db_query(
            "UPDATE `products` SET `product_cat`='$pcategory',`product_brand`='$pbrand',`product_title`='$ptitle', `product_price`='$pprice',`product_desc`='$pdesc', `product_image`='$pimage',`product_keywords`='$pkeywords' WHERE `product_id`='$pid'"
        );
    }

    function delete_productrecord_cls($id)
    {
        // return true or false
        return $this->db_query(
            "DELETE FROM `products` WHERE `product_id`='$id'"
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