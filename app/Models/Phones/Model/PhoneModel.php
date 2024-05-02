<?php


namespace App\Models\Phones\Model;

use App\Models\Phones\Phone;
use Illuminate\Database\Eloquent\Model;
use App\Models\Phones\LandlinePhone;
use App\Models\Phones\FeaturePhone;
use App\Models\Phones\SmartPhone;

class PhoneModel extends Model
{

    protected $guarded = [];

    protected $table = "model";

    public function landlinePhones()
    {
        return $this->hasMany(LandlinePhone::class);
    }

    public function featurePhones()
    {
        return $this->hasMany(FeaturePhone::class);
    }

    public function smartPhones()
    {
        return $this->hasMany(SmartPhone::class, );
    }
}