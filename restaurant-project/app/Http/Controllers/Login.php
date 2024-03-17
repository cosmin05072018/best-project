<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\login as loginRequest;
use App\Models\User;

class Login extends Controller
{
   public function loginForm(){
       return view('login');
   }
   public function validateLoginForm(loginRequest $request){

   }
}
