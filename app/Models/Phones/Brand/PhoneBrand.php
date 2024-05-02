<?php


namespace App\Models\Phones\Brand;

use App\Models\Phones\Phone;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Phones\LandlinePhone;
use App\Models\Phones\FeaturePhone;
use App\Models\Phones\SmartPhone;

class PhoneBrand extends Model
{

    protected $guarded = [];

    protected $table = "brand";
   
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
        return $this->hasMany(SmartPhone::class);
    }
}