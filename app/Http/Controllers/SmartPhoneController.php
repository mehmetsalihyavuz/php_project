<?php

namespace App\Http\Controllers;

use App\Models\Phones\SmartPhone;
use Illuminate\Http\Request;

class SmartPhoneController extends Controller
{
    public function index() {
        
        $smartphone = SmartPhone::paginate(5);
    
        return view('phones.smartphone.index', [
            "smartphone" => $smartphone
        ]) ;

    }  

    public function show(SmartPhone $smartphone) {

        return view('phones.smartphone.show',[
            "smartphone" => $smartphone
        ]);
    }

    public function buy (SmartPhone $smartphone) {
        return view('phones.smarthpone.buy', [
            "smartphone" => $smartphone
        ]);
    }
}