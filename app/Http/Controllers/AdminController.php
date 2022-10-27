<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function adminLogin()
    // {
    //     return view('Admin.auth.login');
    // }
    // public function adminRegister()
    // {
    //     return view('Admin.auth.register');
    // }
    public function adminDash()
    {
        return view('Admin.pages.dashboard');
    }
}
