<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function forgotPassword()
    {
        return view('admin.auth.forgot-password');
    }

}
