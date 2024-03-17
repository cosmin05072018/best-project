<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\signup as signupRequest;
use App\Models\User;

class Signup extends Controller
{
    public function signupForm()
    {
        return view('signup');
    }

    public function validateSignupForm(signupRequest $request)
    {
//        we check if the email already exists in the database
        $email = $request->email;

        if(User::where('email', $email)->exists()){
            return view('signup', ['message' => 'This email already exists!']);
        }else{
//            insert in DB
            return view('login');
        }
    }
}
