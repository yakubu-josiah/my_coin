<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Laravel\Fortify\Fortify;
use App\Actions\Fortify\RedirectIfTwoFactorAuthenticatable as Redirects;

class LoginResponse implements LoginResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        return $request->wantsJson()
                    ? response()->json(['two_factor' => false])
                    
                    // : redirect()->intended('login')->with("status", "Login Success!!");
                    : redirect()->route('/admin/dashboard');
    }
}
