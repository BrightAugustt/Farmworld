<?php

require "classes\product_class.php";

class CropsTest extends \PHPUnit\Framework\TestCase{

   public function testAdd(){
        $add_croprecord_cls = new App\crop_class;
        $result = $add_croprecord_cls->add_croprecord_cls(21,'ama',3,3,'fruit','dcjdcd.jpg','dcdcdc');

        $this->assertTrue(21,'ama',3,3,'fruit','dcjdcd.jpg','dcdcdc',$result);

       
}
}


?>