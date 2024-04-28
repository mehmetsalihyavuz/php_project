<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

use  Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Auth\Authenticatable ;

class RegisterUserController extends Controller
{
    public function create()  
    {   
        return view('auth.register');
    }
    public function store(){
        // validate

        $attributes = request()->validate([
            'username' => ['required','string'],
            'first_name'=> ['required','string'],
            'last_name'=> ['required','string'],
            'email'=> ['required','email'], 
            'password'=> ['required',Password::min(6),'confirmed']
        ]);
        $user = User::create($attributes);
        
        Auth::login($user);

        return redirect('/jobs');
    }
}