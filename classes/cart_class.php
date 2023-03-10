<?php
//connect to database class
include_once(dirname(__FILE__)) . "../../settings/db_class.php";

class cart_class extends db_connection{
	//--INSERT--//
	//add to cart
	function add_to_cart_cls($prodId, $ip_address, $custId, $qty){
		$sql = "INSERT INTO cart (`crop_id`,`ip_add`,`customer_id`,`qty`) VALUES ('$prodId', '$ip_address', '$custId','$qty')";
		return $this-> db_query($sql);
	}

	/**INSERT ORDERS */
	public function insert_order_cls($custId,$invoice,$date, $orderStatus){
		$sql = "INSERT INTO `orders` (`customer_id`, `invoice_no`, `order_date`, `order_status`) VALUES ('$custId', '$invoice', '$date', '$orderStatus')"; 
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
	public function insert_payment_cls($p_amount, $custId, $orderid, $orderdate){
		$sql = "INSERT INTO `payment`(`amt`, `customer_id`, `order_id`,`currency`, `payment_date`) VALUES ('$p_amount', '$custId', '$orderid', 'GHS', '$orderdate')";
		return $this-> db_query($sql);
	}

	
	public function cart_details_cls($custId){
		$sql = "SELECT `crop_id`, `qty` FROM `cart` WHERE `customer_id` = '$custId'"; 
		return $this-> db_fetch_one($sql);//fetchone
	}

	public function insert_order_details_cls($orderid,$crpid,$qty){
		$sql = "INSERT INTO `orderdetails` (`order_id`, `crop_id`, `qty`) VALUES ('$orderid', '$crpid', '$qty')";
		// return ($sql); 
		return $this-> db_query($sql);
	}
	
	/**DELETE FROM CART */
	public function del_cart_cls($custId){
		$sql = "DELETE FROM `cart` WHERE `customer_id` = '$custId'"; 
		return $this-> db_query($sql);
	}
	

    //--SELECT--/

    function select_all_cart_cls($ip_address,$custId){
		// $sql = "SELECT * FROM cart";
		$sql = "SELECT * FROM cart INNER JOIN crops on cart.crop_id = crops.crop_id WHERE ip_add ='$ip_address' or customer_id = '$custId'";
		// $sql = "SELECT crops.product_id,crops.product_price*cart.qty, crops.product_title, crops.product_image, crops.product_price, cart.qty FROM `cart` INNER JOIN `crops` ON cart.p_id = crops.product_id";
		return $this-> fetch($sql);
	}

	function view_cart_cls($custId){
		$sql = "SELECT crops.crop_id, crops.crop_image, crops.crop_name, crops.crop_price, cart.qty
		FROM `crops`
		JOIN cart ON crops.crop_id = cart.crop_id
		WHERE crops.crop_id AND cart.customer_id = '$custId'";
		return $this->fetch($sql);
	}


    //controller for duplicate
    function dup_cart_qty_cls($crpId, $custId){
		$sql= "SELECT * FROM `cart` WHERE `crop_id`= '$crpId' AND `customer_id` = '$custId'";
		return $this-> db_fetch_all($sql);
	}
 	
    //--UPDATE--//
    function update_cart_qty_cls($crpId, $custId, $qty){
        $sql= "UPDATE  `cart` SET `qty` = '$qty' WHERE crop_id= '$crpId' AND customer_id = '$custId'";
		return $this-> db_query($sql);
    }

    //--DELETE--//
    function delete_from_cart_cls($crpId,$custId){
        $sql = "DELETE FROM `cart` WHERE `crop_id`='$crpId' AND `customer_id`='$custId'";
		return $this-> db_query($sql);
     }

	 function multiplyPrice($custId){
		$sql = "SELECT SUM(crops.crop_price * cart.qty) AS Multiply
		FROM crops
		JOIN cart ON crops.crop_id = cart.crop_id
		WHERE cart.customer_id = '$custId'
		";
		return $this-> fetchOne($sql);
	 }
}
