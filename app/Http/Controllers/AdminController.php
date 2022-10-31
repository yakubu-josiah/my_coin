<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function adminLogin()
    {
        return view('Admin.auth.login');
    }
    // public function adminRegister()
    // {
    //     return view('Admin.auth.register');
    // }


    public function adminSubmitLogin(Request $request){
        $request->validate([
            'email' => 'required|exists:admins',
            'password' => 'required'
        ]);


        if(auth()->guard('admin')->attempt(['email' => $request['email'], 'password' => $request['password']])){
            $user = auth()->guard('admin')->user();
            if($user){
                return redirect()->route('adminDash')->with('success','You are Logged in sucessfully.');
                // return redirect()->route('adminDashboard')->with('success','You are Logged in sucessfully.');
            }
        }else {
            return back()->with('error','Whoops! invalid email and password.');
        }

    }
    public function adminDash()
    {
        return view('Admin.pages.dashboard');
    }
}
