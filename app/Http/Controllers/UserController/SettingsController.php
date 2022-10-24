<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    //


    public function index()
    {
        return view('User.index');
    }


    public function archived()
    {
        return view('User.archive');
    }

    public function dashboard()
    {
        return view('User.dashboard');
    }
}
