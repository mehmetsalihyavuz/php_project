<?php

namespace App\Http\Controllers;

use App\Models\Phones\Color\PhoneColor;
use App\Models\Phones\SmartPhone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index(){
        /* $phones = PhoneColor::find(2);
         dd($phones->smartPhones[0]->brands->name);
 
    foreach ($phones->smartPhones as $phone){
        dump($phone->brands->name);
    } */

    /* $phones = SmartPhone::all()->paginate(5); */

    $phones = SmartPhone::paginate(2);
    /* 
        return view("phones.index",[
            "phones"=> $phones
        ]); */

        return view("phones.index", compact("phones"));
    }
}
