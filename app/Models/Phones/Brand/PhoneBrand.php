<?php


namespace App\Models\Phones\Brand;

use App\Models\Phones\Phone;


class PhoneBrand {

    private $brand;

    public function __construct(Phone $brand) {
        $this->brand = $brand;
    }
    public function getBrand(){
        return $this->brand;
    }
    
    public function setBrand($brand){
        $this->brand = $brand;
    }
}