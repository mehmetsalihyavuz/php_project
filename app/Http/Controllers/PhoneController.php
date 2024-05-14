<?php

namespace App\Http\Controllers;

use App\Models\Phones\SmartPhone;
use App\Models\Phones\FeaturePhone;
use App\Models\Phones\LandlinePhone;

class PhoneController extends Controller
{
    public function index()
    {
        return view("phones.index");
    }
}
