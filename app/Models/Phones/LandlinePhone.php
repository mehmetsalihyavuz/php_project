<?php

namespace App\Models\Phones;

use App\Models\Phones\Brand\PhoneBrand;
use App\Models\Phones\Color\PhoneColor;
use App\Models\Phones\Model\PhoneModel;
use App\Models\Phones\Interface\MakingCallInterface;
use App\Models\Phones\Phone;
use Illuminate\Database\Eloquent\Model;

/* implements MakingCallInterface */
class LandlinePhone extends Phone
{

    protected $guarded = [];

    protected $table = "landlinephone";
    protected $brand;

    protected $model;

    protected $color;

    /*   public function __construct(PhoneBrand $brand,
                                  PhoneModel $model, 
                                  PhoneColor $color) {
          
          $this->brand = $brand;
          $this->model = $model;
          $this->color = $color;
      } */
    public function attributes($brand, $model, $color)
    {
        return "This phone is " . $this->brand->getBrand() . " " .
            $this->color->getColor() . " " .
            $this->model->getModel();
    }

    /*  public function makeCall() : string{
         return "The call is made from" . $this->brand->getBrand() . " " 
                                        . $this->model->getModel();
     } */

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