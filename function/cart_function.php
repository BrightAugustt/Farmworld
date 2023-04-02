<?php
require("../controllers/cart_controller.php"); 

function countCart($cid,$ip){
    $result=count_cart_ctr($cid,$ip);
    
    if ($result!=false) {
     echo $result['cart_num'];
  }
  else{
    echo "0";
  }
  }

  


?>