<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function signup()
    {
        return view('Register.signUp');
    }
    
    public function login()
    {
        return view('Register.Login');
    }

}
