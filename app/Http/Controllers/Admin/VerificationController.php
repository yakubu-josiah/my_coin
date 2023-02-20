<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
    public function verifiyingCode(Request $request){
        $this->validate($request, [
            'token' => 'required',
        ]);

        $user = Admin::where('token', $request->token)->first();
        if($user){
            return redirect()->route('vrfy-newPass', ['id' => $user->id]);
        }       
        return back()->with('failed', 'Wrong Verfication Code');
    }

    public function newPassword($id){
        return view('admin.auth.change-password', ['userId' => Admin::findOrFail($id)]);
    }

    public function updatePassword(Request $request, $id){
        $user = Admin::findOrFail($id);
        $this->validate($request, [
            'password' => 'required|same:password|min:6',
        ]);
        $userID = Admin::where('id', $user->id)->first();
        if ($userID) {
            // $userID['is_verified'] = 1;
            $userID['token'] = '';
            $userID['password'] = Hash::make($request->password);
            $userID->save();
            return redirect()->route('adminLog')->with('success', 'Success! password has been changed');
        }
        return back()->with('failed', 'Failed! something went wrong');
    }
}
