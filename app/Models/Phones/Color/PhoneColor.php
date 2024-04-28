<?php


namespace App\Models\Phones\Color;

use App\Models\Phones\Phone;


class PhoneColor {

    private $color;

    public function __construct(Phone $color) {
        $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }
    
    public function setColor($color){
        $this->color = $color;
    }
}