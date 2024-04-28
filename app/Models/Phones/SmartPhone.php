<?php

namespace App\Models\Phones;

use App\Models\Phones\Brand\PhoneBrand;
use App\Models\Phones\Color\PhoneColor;
use App\Models\Phones\Model\PhoneModel;
use App\Models\Phones\Interface\PhoneInterface;
use App\Models\Phones\Phone;

class SmartPhone extends Phone {

    private $brand;

    private $model;

    private $color;
    
    public function __construct(PhoneBrand $brand, PhoneModel $model, PhoneColor $color) {
        
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    public function attributes($brand, $model, $color){
        return "This phone is " . $this->brand . $this->color . $this->brand;
    }
}