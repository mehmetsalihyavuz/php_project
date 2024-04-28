<?php

namespace App\Models\Phones;


use App\Models\Phones\Brand\PhoneBrand;
use App\Models\Phones\Color\PhoneColor;
use App\Models\Phones\Interface\MakingCallInterface;
use App\Models\Phones\Interface\SendingMessageInterface;
use App\Models\Phones\Model\PhoneModel;
use App\Models\Phones\Phone;
use App\Models\Phones\Interface\BatteryInterface;

class FeaturePhone extends Phone {
    
    private $brand;

    private $model;

    private $color;
    
    public function __construct(PhoneBrand $brand, 
                                PhoneModel $model, 
                                PhoneColor $color, 
                                BatteryInterface $batteryInterface,
                                SendingMessageInterface $sendingMessageInterface,
                                MakingCallInterface $makingCallInterface) {
        
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->batteryInterface = $batteryInterface;
        $this->sendingMessage = $sendingMessageInterface;
        $this->makingCallInterface = $makingCallInterface;
    }
    public function attributes($brand, $model, $color)
    {
        return "This phone is " . $this->brand ."". $this->model ."". $this->color;
    }

    public function hardware ()
    {
        
    }
}