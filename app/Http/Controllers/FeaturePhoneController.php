<?php

namespace App\Http\Controllers;

use App\Models\Phones\FeaturePhone;
use App\Models\Phones\Purchase\Salary;
use Exception;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FeaturePhoneController extends Controller
{
    public function index()
    {
        $featurephone = FeaturePhone::paginate(5);

        return view('phones.featurephone.index', [
            "featurephone" => $featurephone
        ]);
    }

    public function show(FeaturePhone $featurephone)
    {
        return view('phones.featurephone.show', [
            "featurephone" => $featurephone,
        ]);
    }

    public function buy(FeaturePhone $featurephone, User $user)
    {
        $user = Auth::user();

        // Check if the phone is already assigned to any user
        if ($featurephone->user_id !== null) {

            // Check if the phone is assigned to the same user trying to make the purchase
            if ($featurephone->user_id === $user->id) {
                
                return redirect()->back()->with('error', 'You already own this phone.');
            } else {

                return redirect()->back()->with('error', 'Phone is already assigned to another user.');
            }
        }
        
        // Checking if the user has enough salary to buy
        $salary = new Salary();

        $salaryResult = $salary->calculateSalary($user->salary, $featurephone->price, $user);

        if (!$salaryResult) {
            return redirect()->back()->with('error', 'Insufficient salary to purchase the phone.');
        } else {
            $featurephone->update([
                "user_id" => $user->id
            ]);
        }

        return redirect("/")->with('success', 'FeaturePhone purchased successfully');
    }
}
