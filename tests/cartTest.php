<?php

require "classes\cart_class.php";

class CartTest extends \PHPUnit\Framework\TestCase{

   public function testAdd_to_Cart(){
        $add_to_cart_cls= new cart_class();
        $result = $add_to_cart_cls->add_to_cart_cls(3, '127.0.0.1', 1, 2);

        $this->assertTrue($result);

   }

   public function testRemove_customer_cart_items(){
        $del_cart_cls = new cart_class();
        $result = $del_cart_cls->del_cart_cls('123');

        $this->assertTrue($result);

   }

   public function testUpdate_cart_items(){
     $update_cart_qty_cls = new cart_class();
     $result = $update_cart_qty_cls->update_cart_qty_cls(5,3);

     $this->assertTrue($result);

}

// public function testInsert_Order_Details(){
//      $insert_order_cls = new cart_class();
//      $custId = 1;
//     $cropName = "Tomatoes";
//     $date = "2023-04-13";
//     $qty = 5;
//     $customerEmail = "johndoe@example.com";
//     $amount = 15.99;
//     $sql = "INSERT INTO `orders` (`customer_id`, `crop_name`, `order_date`, `qty`, `customer_email`, `amount`) VALUES ('$custId', '$cropName', '$date', '$qty', '$customerEmail', '$amount')";
//     $result = $insert_order_cls->insert_order_cls($custId, $cropName, $date, $qty, $customerEmail, $amount);
//     $this->assertTrue($result);
// }


}


?>