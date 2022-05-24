<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
     $users =User::latest()->get();
     return view('users.index',['users' => $users]);
    }
    function store(Request $request){

        $request ->validate([

            'name' => ['required'],
            'email' =>['required','email','unique:users'],
            'password' => ['required','min:8'],
        ]);

        User::create([
            'name' => $request ->name,
            'email' => $request ->email,
            'password' => bcrypt($request ->password)
        ]);

        return back();

    }
    function destroy(User $user){

        $user -> delete();

        return back();

    }
}
