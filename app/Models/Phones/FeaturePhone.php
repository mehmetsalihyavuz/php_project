<?php

namespace App\Models\Phones;


use App\Models\Phones\Brand\PhoneBrand;
use App\Models\Phones\Color\PhoneColor;
use App\Models\Phones\Interface\MakingCallInterface;
use App\Models\Phones\Interface\SendingMessageInterface;
use App\Models\Phones\Model\PhoneModel;
use App\Models\Phones\Phone;
use App\Models\Phones\Interface\BatteryInterface;

class FeaturePhone extends Phone implements MakingCallInterface, SendingMessageInterface, BatteryInterface{
    
    private $brand;

    private $model;

    private $color;
    
    public function __construct(PhoneBrand $brand, 
                                PhoneModel $model, 
                                PhoneColor $color, 
                                ) 
    {    
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }
    
    public function attributes($brand, $model, $color){
        return "This phone is " . $this->brand->getBrand() . " " . 
                                  $this->color->getColor() . " " . 
                                  $this->brand->getBrand() ;
    }

    public function makeCall() : string{
       return "The call is made from" . $this->brand->getBrand() . " " . $this->model->getModel();
    }

    public function getBattery(): string{
        return $this->brand->getBrand() . "has " . random_int(1,100);
    }

    public function sendMessage(): string{
        return "Sending message from " . $this->brand->getBrand() . $this->model->getModel();
    }
}