<?php

namespace App\Http\Controllers;

use App\Models\Phones\FeaturePhone;
use Illuminate\Http\Request;

class FeaturePhoneController extends Controller
{
    public function index() {
        $featurephone = FeaturePhone::paginate(5);
    
        return view('phones.featurephone.index', [
            "featurephone" => $featurephone
        ]) ;
    }  

    public function show(FeaturePhone $featurephone) {

        return view('phones.featurephone.show', [
            "featurephone" => $featurephone
        ]);
    }

    public function buy (FeaturePhone $featurephone) {
        dd('Buying the FeaturePhone');
    }
}
