<?php

namespace App\Models\Phones;

use App\Models\Phones\Brand\PhoneBrand;
use App\Models\Phones\Color\PhoneColor;
use App\Models\Phones\Interface\BatteryInterface;
use App\Models\Phones\Interface\MakingCallInterface;
use App\Models\Phones\Interface\SendingMessageInterface;
use App\Models\Phones\Attributes\PhoneAttributes;
use App\Models\Phones\Model\PhoneModel;
use App\Models\Phones\Phone;

class SmartPhone extends Phone implements SendingMessageInterface, MakingCallInterface, BatteryInterface 
{

    protected $guarded = [];

    protected $table = "smartphone";

    protected $brand;

    protected $model;

    protected $color;

    public function attributes($brand, $model, $color)
    {
        $brand = $this->brands->name;
        $model = $this->models->name;
        $color = $this->colors->name;

        $attr = new PhoneAttributes;
    
        $at = $attr->attributes($brand,$model,$color);

        return $at;
    }

    public function makeCall(): string
    {
        return "The call is made from " . $this->brands->name . " "
                                       . $this->models->name;
    }

    public function getBattery(): string
    {
        return $this->brands->name . "has " . random_int(1, 100);
    }

    public function sendMessage(): string
    {
        return "Sending message from " . $this->brands->name 
                                       . $this->models->name;
    }

    public function brands()
    {
        return $this->belongsTo(PhoneBrand::class, "phone_brand_id");
    }

    public function models()
    {
        return $this->belongsTo(PhoneModel::class, "phone_model_id");
    }

    public function colors()
    {
        return $this->belongsTo(PhoneColor::class,"phone_color_id");
    }
}