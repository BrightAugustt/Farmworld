<?php
//connect to database class
include_once(dirname(__FILE__)) . "../../settings/dbClass.php";

class cart_class extends db_connection{
	//--INSERT--//
	//add to cart
	function add_to_cart_cls($pid, $ip_address, $cid, $qty){
		$sql = "INSERT INTO cart (`p_id`,`ip_add`,`c_id`,`qty`) VALUES ('$pid', '$ip_address', '$cid','$qty')";
		return $this-> db_query($sql);
	}

	/**INSERT ORDERS */
	public function insert_order_cls($cid,$p_invoice,$date, $orderStatus){
		$sql = "INSERT INTO `orders` (`customer_id`, `invoice_no`, `order_date`, `order_status`) VALUES ('$cid', '$p_invoice', '$date', '$orderStatus')"; 
		return $this-> db_query($sql);
	}

	public function orderid_cls(){
		$sql = "SELECT `order_id` FROM `orders` ORDER BY `order_id` DESC LIMIT 1"; 
		return $this-> fetchOne($sql);//fetch one
	}

	public function orderdate_cls(){
		$sql = "SELECT `order_date` FROM `orders` ORDER BY `order_id` DESC LIMIT 1"; 
		return $this-> fetchOne($sql);//fetchone
	}

	//--INSERT--//
	public function insert_payment_cls($p_amount, $cid, $orderid, $orderdate){
		$sql = "INSERT INTO `payment`(`amt`, `customer_id`, `order_id`,`currency`, `payment_date`) VALUES ('$p_amount', '$cid', '$orderid', 'GHS', '$orderdate')";
		return $this-> db_query($sql);
	}

	
	public function cart_details_cls($cid){
		$sql = "SELECT `p_id`, `qty` FROM `cart` WHERE `c_id` = '$cid'"; 
		return $this-> db_fetch_one($sql);//fetchone
	}

	public function insert_order_details_cls($orderid,$pid,$qty){
		$sql = "INSERT INTO `orderdetails` (`order_id`, `product_id`, `qty`) VALUES ('$orderid', '$pid', '$qty')";
		// return ($sql); 
		return $this-> db_query($sql);
	}
	
	/**DELETE FROM CART */
	public function del_cart_cls($cid){
		$sql = "DELETE FROM `cart` WHERE `c_id` = '$cid'"; 
		return $this-> db_query($sql);
	}
	

    //--SELECT--/

    function select_all_cart_cls($ip_address,$cid){
		// $sql = "SELECT * FROM cart";
		$sql = "SELECT * FROM cart INNER JOIN products on cart.p_id = products.product_id WHERE ip_add ='$ip_address' or c_id = '$cid'";
		// $sql = "SELECT products.product_id,products.product_price*cart.qty, products.product_title, products.product_image, products.product_price, cart.qty FROM `cart` INNER JOIN `products` ON cart.p_id = products.product_id";
		return $this-> fetch($sql);
	}

	function view_cart_cls($customer_id){
		$sql = "SELECT products.product_id, products.product_title, products.product_image, products.product_price, cart.p_id, cart.qty, cart.c_id FROM `products` JOIN cart WHERE 
		product_id = cart.p_id AND cart.c_id = '$customer_id'";

		return $this->fetch($sql);
	}

    //controller for duplicate
    function dup_cart_qty_cls($pid, $cid){
		$sql= "SELECT * FROM `cart` WHERE `p_id`= '$pid' AND `c_id` = '$cid'";
		return $this-> db_fetch_all($sql);
	}
 	
    //--UPDATE--//
    function update_cart_qty_cls($pid, $cid, $qty){
        $sql= "UPDATE  `cart` SET `qty` = '$qty' WHERE p_id= '$pid' AND c_id = '$cid'";
		return $this-> db_query($sql);
    }

    //--DELETE--//
    function delete_from_cart_cls($pid,$cid){
        $sql = "DELETE FROM `cart` WHERE `p_id`='$pid' AND `c_id`='$cid'";
		return $this-> db_query($sql);
     }

	 function multiplyPrice($cid){
		$sql = "SELECT SUM(products.product_price * cart.qty) AS Multiply FROM `cart` inner join products on p_id = product_id WHERE cart.c_id = $cid";
		return $this-> fetchOne($sql);
	 }
}
