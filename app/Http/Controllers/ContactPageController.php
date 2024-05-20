<?php

namespace App\Http\Controllers;

use App\Models\Phones\FeaturePhone;
use App\Models\Phones\LandlinePhone;
use App\Models\Phones\SmartPhone;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ContactPageController extends Controller
{

    public $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function index()
    {

        return view('contact.contact', [
            "user" => $this->user
        ]);
    }

    public function smartphone()
    {
        $smartphone = SmartPhone::where('user_id', $this->user->id)->paginate(5);

        return view('contact.smartphone', [
            "smartphone" => $smartphone,
            "user" => $this->user
        ]);
    }

    public function featurephone()
    {
        $featurephone = FeaturePhone::where('user_id', $this->user->id)->paginate(5);

        return view('contact.featurephone', [
            "featurephone" => $featurephone, 
            "user" => $this->user
        ]);

    }
    public function landlinephone()
    {

        $landlinephone = LandlinePhone::where('user_id', $this->user->id)->paginate(5);
        return view('contact.landlinephone', [
            "landlinephone" => $landlinephone,
            "user" => $this->user
        ]);
    }
}
