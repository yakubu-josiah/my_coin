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
            $token = random_int(000000, 999999);

            $user['token'] = $token;
            $user->save();
            $user['is_verified'] = 0;
    
            // Mail::to($request->email)->send(new ResetPassword($user->username, $token));

            // if(Mail::failures() != 0) {
                return redirect()->route('vrfy-emailCode', ['id' => $user->id])->with('success', 'Password reset code has been sent to your email');
            // }
        }
        return back()->with('failed', 'Failed! email is not registered');
    }

    public function codeVerify($id){
        return view('admin.auth.code-verification', ['userId' => Admin::findOrFail($id)]);
    }
    public function verifiyingCode(Request $request, $id){
        $this->validate($request, [
            'token' => 'required',
        ]);

        $user = Admin::where('token', $request->token)->first();
        if($user){
            return redirect()->route('change-password', ['id' => $user->id]);
        }       
        return back()->with('failed', 'Wrong Verfication Code');
    }
}
