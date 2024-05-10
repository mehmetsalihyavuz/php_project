<?php

namespace App\Http\Controllers;

use App\Models\Phones\LandlinePhone;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Phones\Purchase\Salary;

class LandlinePhoneController extends Controller
{
    public function index()
    {
        $landlinephone = LandlinePhone::paginate(5);

        return view('phones.landlinephone.index', [
            "landlinephone" => $landlinephone
        ]);
    }

    public function show(LandlinePhone $landlinephone)
    {

        return view('phones.landlinephone.show', [
            "landlinephone" => $landlinephone
        ]);
    }

    public function buy(LandlinePhone $landlinephone, User $user)
    {
        $user = Auth::user();

        // Check if the phone is already assigned to any user
        if ($landlinephone->user_id !== null) {

            // Check if the phone is assigned to the same user trying to make the purchase
            if ($landlinephone->user_id === $user->id) {

                return redirect()->back()->with('error', 'You already own this phone.');
            } else {

                return redirect()->back()->with('error', 'Phone is already assigned to another user.');
            }
        }

        // Checking if the user has enough salary to buy
        $salary = new Salary();

        $salaryResult = $salary->calculateSalary($user->salary, $landlinephone->price, $user);

        if (!$salaryResult) {
            return redirect()->back()->with('error', 'Insufficient salary to purchase the phone.');
        } else {
            $landlinephone->update([
                "user_id" => $user->id
            ]);
        }

        return redirect("/")->with('success', 'LandlinePhone purchased successfully');
    }
}