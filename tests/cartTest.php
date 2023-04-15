<?php

require "classes\cart_class.php";

class CartTest extends \PHPUnit\Framework\TestCase{

   public function testAdd(){
        $add_to_cart_cls= new App\cart_class;
        $result = $add_to_cart_cls->add_to_cart_cls( 'Test Crop',
        'Test Farmer',
        10,
        5.0,
        'Test Category',
        'test_image.jpg', 
        'Test Description');

        $this->assertTrue($result);

   }

   public function testDelete_crop_added(){
        $delete_croprecord_cls = new App\crop_class;
        $result = $delete_croprecord_cls->delete_croprecord_cls('Sample Crop', 'Sample Farmer', 10, 50, 'Vegetable', 'sample_image.jpg', 'Sample Crop Description');

        $this->assertTrue($result);

   }

   

   




}


?>