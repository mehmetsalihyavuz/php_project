<?php

namespace App\Models\Phones;

use Illuminate\Database\Eloquent\Model;

abstract class Phone extends Model{
    
    protected $guarded = [];
    
    protected $brand;

    protected $model;

    protected $color;

    abstract public function attributes($brand, $model, $color);

}