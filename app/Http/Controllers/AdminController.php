<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Laravel\Fortify\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * The guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected $guard;

    /**
     * Create a new controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\StatefulGuard  $guard
     * @return void
     */
    public function adminRegister()
    {
        return view('admin.auth.register');
    }

    public function adminDash()
    {
        return view('admin.pages.dashboard');
    } 
    /**
     * Show the login view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Laravel\Fortify\Contracts\LoginViewResponse
     */
    public function create(Request $request)
    {
        if (Auth::guard('admin')->user()) {
            return redirect()->route('/admin/dashborad');
        } else {
            return view('admin.auth.login');
        }
    }

    /**
     * Attempt to authenticate a new session.
     *
     * @param  \Laravel\Fortify\Http\Requests\LoginRequest  $request
     * @return mixed
     */
    public function store(LoginRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                                ->withErrors($validator)
                                ->withInput();
            }
            $email = $request->email;
            $password = $request->password;
            if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password])) {
                return redirect()->route('adminDash');
            }else{
                return back()->withErrors(['credientials does not match']);
            }
    }
}