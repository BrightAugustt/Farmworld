<?php
require("../controllers/cart_controller.php"); 
require("../controllers/crop_controller.php"); 

function countCart($cid,$ip){
    $result=count_cart_ctr($cid,$ip);
    
    if ($result!=false) {
     echo $result['cart_num'];
  }
  else{
    echo "0";
  }
  }

function sumAeo(){
    $result=aeo_count_ctr();
    
    if ($result!=false) {
     echo $result['aeo'];
   }
   else{
    echo "0";
  }
}

function sumCustomers(){
    $result=customer_count_ctr();
    
    if ($result!=false) {
     echo $result['customer'];
   }
   else{
    echo "0";
  }
}


?>