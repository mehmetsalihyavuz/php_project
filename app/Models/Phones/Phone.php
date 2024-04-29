<?php

namespace App\Models\Phones;

use Illuminate\Database\Eloquent\Model;

abstract class Phone extends Model{
    
    protected $brand;

    protected $model;

    protected $color;

    abstract public function attributes($brand, $model, $color);
/* 
    public function featurephone()
    {
        return $this->hasMany(FeaturePhone::class);
    }

    public function landlinephone()
    {
        return $this->hasMany(LandlinePhone::class);
    }

    public function smartphone()
    {
        return $this->hasMany(Smartphone::class);
    } */
}