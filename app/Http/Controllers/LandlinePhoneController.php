<?php

namespace App\Http\Controllers;

use App\Models\Phones\LandlinePhone;
use App\Models\User;
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

    public function buy (LandlinePhone $landlinephone, User $user) {
        dd('Buying the LandlinePhone');
    }
}