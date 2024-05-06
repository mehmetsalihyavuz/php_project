<?php

namespace App\Models\Phones\Attributes;


class PhoneAttributes
{
    public function attributes($brand, $model, $color)
    {

        return "This phone is " . $brand . " " . $model . " " . $color;

    }
}