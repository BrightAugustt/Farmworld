<?php

require "classes\product_class.php";



class CropsTest extends \PHPUnit\Framework\TestCase{

   public function testAdd(){
        $add_croprecord_cls = new crop_class;
        $result = $add_croprecord_cls->add_croprecord_cls( 'Test Crop',
        'Test Farmer',
        10,
        5.0,
        'Test Category',
        'test_image.jpg', 
        'Test Description');

        $this->assertTrue($result);

   }

   public function testDelete_crop_added(){
        $delete_croprecord_cls = new crop_class;
        $result = $delete_croprecord_cls->delete_croprecord_cls('Sample Crop', 'Sample Farmer', 10, 50, 'Vegetable', 'sample_image.jpg', 'Sample Crop Description');

        $this->assertTrue($result);

   }

   public function testUpdate_Crop_Information(){
     $update_crop = new crop_class();

     $crop_id = 1;
     $crop_name = "Tomatoes";
     $farmer_name = "John Doe";
     $farmer_contact = "123-456-7890";
     $farm_size = "10 acres";
     $qty = 100;
     $crop_price = 2.99;
     $crop_image = "tomatoes.jpg";
     $crop_cat = "Vegetables";
     $crop_desc = "Fresh and juicy tomatoes";

     $result = $update_crop->update_crop($crop_id, $crop_name, $farmer_name, $farmer_contact, $farm_size, $qty, $crop_price, $crop_image, $crop_cat, $crop_desc);

     $this->assertTrue($result);

}

}


?>