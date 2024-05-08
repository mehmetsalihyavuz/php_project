<?php

namespace App\Models\Phones;

use App\Models\Phones\Brand\PhoneBrand;
use App\Models\Phones\Color\PhoneColor;
use App\Models\Phones\Model\PhoneModel;
use App\Models\Phones\Attributes\PhoneAttributes;
use App\Models\Phones\Interface\MakingCallInterface;
use App\Models\Phones\Phone;
use App\Models\Phones\Purchase\PurchasePhone;
use App\Models\Phones\Purchase\Salary;
use App\Models\User;

class LandlinePhone extends Phone implements MakingCallInterface
{

    protected $guarded = [];

    protected $table = "landlinephone";

    protected $brand;

    protected $model;

    protected $color;

    private $salary;

    private $price;

    public function attributes($brand, $model, $color)
    {
        $brand = $this->brands->name;
        $model = $this->models->name;
        $color = $this->colors->name;

        $attr = new PhoneAttributes;

        $at = $attr->attributes($brand, $model, $color);

        return $at;
    }

    public function purchasePhone(User $user, array $attributes, )
    {
        $this->salary = $user->salary;

        $salarycheck = new Salary($this->salary, $this->price);

        if (!$salarycheck) {

            $purchasePhone = new PurchasePhone;

            $result = $purchasePhone->purchaseLandlinePhone($this->users->id, [
                $this->brands->id,
                $this->models->id,
                $this->colors->id,
            ]);

            return $result;

        }
    }

    public function makeCall(): string
    {
        return "The call is made from " . $this->brands->name . " "
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
        return $this->belongsTo(PhoneColor::class, "phone_color_id");
    }

    public function users()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}