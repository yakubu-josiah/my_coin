<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VerificationController extends Controller
{
    public function forgotPassword()
    {
        return view('admin.auth.forgot-password');
    }
    public function validateEmail(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);
        
        $user = Admin::where('email', $request->email)->first();
        if ($user) {
            $token = Str::random(8);

            $user['token'] = $token;
            $user->save();
            $user['is_verified'] = 0;
    
            // Mail::to($request->email)->send(new ResetPassword($user->username, $token));

            // if(Mail::failures() != 0) {
                return redirect()->route('code-view', ['id' => $user->id])->with('success', 'Success! Password reset code has been sent to your email');
            // }
        }
        return back()->with('failed', 'Failed! email is not registered');
    }

    public function codeVerify(){
        return view('admin.auth.code-verification');
    }
}
