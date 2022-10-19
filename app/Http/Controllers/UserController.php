<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function viewAuction()
    {
        return view('User.AuctionMenu.viewAuction');
    }

    public function payAuction()
    {
        return view('User.AuctionMenu.payBids');
    }

    public function receiveAuction()
    {
        return view('User.AuctionMenu.receivePay');
    }

    public function bidAuction()
    {
        return view('User.AuctionMenu.bidMsg');
    }

    public function salesAuction()
    {
        return view('User.AuctionMenu.sales');
    }

    public function bonusAuction()
    {
        return view('User.AuctionMenu.bonuses');
    }

    public function affiliateAuction()
    {
        return view('User.AuctionMenu.affiliates');
    }

    public function historyAuction()
    {
        return view('User.AuctionMenu.history');
    }

    public function bankingAdvanced()
    {
        return view('User.AdvancedSettings.bankDetails');
    }

    public function accountAdvanced()
    {
        return view('User.AdvancedSettings.account', ['user' => Auth::user()]);
    }

    public function updateAccount(Request $request)
    {
        $request->validate([
            'email' => ['bail', 'required', 'string', 'email', 'max:255'],
            'number' => ['bail', 'required', 'string', 'max:20'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        
        // if(!Hash::check($request->old_password, auth()->user()->password)){
        //     return back()->with("error", "Old Password Doesn't match!");
        // }


        // #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password),
            'number' => $request->number,
            'email' => $request->email
        ]);

        // return back()->with("status", "Password changed successfully!");

        session()->flash('message', "Updated successfully!!");
        return redirect()->route('dashboard');
    }
}
