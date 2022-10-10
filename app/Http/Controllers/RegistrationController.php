<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function login()
    {
        return view('Register.Login');
    }

    public function signup()
    {
        return view('Register.signUp');
    }
}
