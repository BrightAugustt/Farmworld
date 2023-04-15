<?php

class CropsTest extends \PHPUnit\Framework\TestCase{

    public function testAdd(){
        $crop = new App\crops;
        $result = $crop->insert();

        $this->assertTrue($result);
    }
}













?>