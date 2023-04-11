<?php
require("../controllers/general_controller.php"); 
function aeoCount(){
    $count=aeoCount_ctr();
    
    if ($count!=false) {
        $count = intval(array_values($count)[0]);
        echo $count;
   }
   else{
    echo "0";
  }
}

echo aeoCount();
// $count =aeoCount_ctr();
// $count = intval(array_values($count)[0]);
// echo $count;

?>