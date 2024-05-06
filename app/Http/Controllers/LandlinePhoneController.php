<?php

namespace App\Http\Controllers;

use App\Models\Phones\LandlinePhone;
use Illuminate\Http\Request;

class LandlinePhoneController extends Controller
{
    public function index() {
        $landlinephone = LandlinePhone::paginate(5);
    
        return view('phones.landlinephone.index', [
            "landlinephone" => $landlinephone
        ]) ;
    }  

    public function show(LandlinePhone $landlinephone) {
        
        return view('phones.landlinephone.show', [
            "landlinephone" => $landlinephone
        ]);
    }

    public function buy (LandlinePhone $landlinephone) {
        dd('Buying the LandlinePhone');
    }
}