<?php

namespace App\Http\Controllers;

use App\Models\Phones\SmartPhone;
use App\Models\Phones\FeaturePhone;
use App\Models\Phones\LandlinePhone;

class PhoneController extends Controller
{
    public function index(){
        /* $phones = PhoneColor::find(2);
         dd($phones->smartPhones[0]->brands->name);
 
    foreach ($phones->smartPhones as $phone){
        dump($phone->brands->name);
    } */

   /*  $phones = SmartPhone::paginate(); */

        /* $smartphones = SmartPhone::paginate(2);
        $landlinephones = LandlinePhone::paginate(2);
        $featurephones = FeaturePhone::paginate(2);    */
/* 
        $smartphones = SmartPhone::all();
        $landlinephones = LandlinePhone::all();
        $featurephones = FeaturePhone::all();    
 */
        
        /* $phones = [
            "smartphones"=> $smartphones,
            "landlinephones"=> $landlinephones,
            "featurephones"=> $featurephones
        ]; */   

        return view("phones.index");
    }
}
