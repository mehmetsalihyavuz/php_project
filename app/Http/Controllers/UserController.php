<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Builder;


class UserController extends Controller
{
    public function index(){

        $users = User::oldest('id')->paginate(5);

        return view("users.index",[
            "users"=> $users,
        ]);
    }
    public function edit(User $user){

        return view("users.edit", ["user" => $user]);
    }

    public function update(User $user){

        request()->validate([
            "first_name"=> ["required","string"],
            "last_name"=> ["required", "string"],
            "email"=> ["required","email"],
        ]);

        $user->update([
            "first_name"=> request("first_name"),
            "last_name"=> request("last_name"),
            "email"=> request("email")
        ]);

        return redirect('/users');
    }

    public function destroy(User $user){

        $user->delete();
        
        return redirect('/users');
    }
}
