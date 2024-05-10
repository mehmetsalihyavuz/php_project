<?php

namespace App\Http\Controllers;

use App\Models\Phones\SmartPhone;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use App\Models\Phones\Purchase\Salary;
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

    public function buy(SmartPhone $smartphone, User $user)
    {
        $user = Auth::user();

        // Check if the phone is already assigned to any user
        if ($smartphone->user_id !== null) {

            // Check if the phone is assigned to the same user trying to make the purchase
            if ($smartphone->user_id === $user->id) {

                return redirect()->back()->with('error', 'You already own this phone.');
            } else {

                return redirect()->back()->with('error', 'Phone is already assigned to another user.');
            }
        }

        // Checking if the user has enough salary to buy
        $salary = new Salary();

        $salaryResult = $salary->calculateSalary($user->salary, $smartphone->price, $user);

        if (!$salaryResult) {
            return redirect()->back()->with('error', 'Insufficient salary to purchase the phone.');
        } else {
            $smartphone->update([
                "user_id" => $user->id
            ]);
        }

        return redirect("/")->with('success', 'Smartphone purchased successfully');
    }
}