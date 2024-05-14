<?php

namespace App\Http\Controllers;

use App\Models\Phones\FeaturePhone;
use App\Models\Phones\LandlinePhone;
use App\Models\Phones\SmartPhone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactPageController extends Controller
{
    public $user;

    public $featurephone;

    public $landlinephone;

    public $smartphone;

    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function index()
    {

        return view('contact', [
            "user" => $this->user,
        ]);
    }

    public function smartphone()
    {
        
        return $this->smartphone = SmartPhone::where('user_id', $this->user->id)->get();
    }

    public function featurephone()
    {
        return $this->featurephone = FeaturePhone::where('user_id', $this->user->id)->get();
    }

    public function landlinephone()
    {
        return $this->landlinephone = LandlinePhone::where('user_id', $this->user->id)->get();
    }
}
