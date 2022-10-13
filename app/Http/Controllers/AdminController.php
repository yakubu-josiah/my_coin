<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.index');
    }

    public function archived()
    {
        return view('Admin.archive');
    }

    public function dashboard()
    {
        return view('Admin.dashboard');
    }

    public function viewAuction()
    {
        return view('Admin.AuctionMenu.viewAuction');
    }

    public function payAuction()
    {
        return view('Admin.AuctionMenu.payBids');
    }

    public function receiveAuction()
    {
        return view('Admin.AuctionMenu.receivePay');
    }

    public function bidAuction()
    {
        return view('Admin.AuctionMenu.bidMsg');
    }

    public function salesAuction()
    {
        return view('Admin.AuctionMenu.sales');
    }

    public function bonusAuction()
    {
        return view('Admin.AuctionMenu.bonuses');
    }

    public function affiliateAuction()
    {
        return view('Admin.AuctionMenu.affiliates');
    }

    public function historyAuction()
    {
        return view('Admin.AuctionMenu.history');
    }

    public function bankingAdvanced()
    {
        return view('Admin.AdvancedSettings.bankDetails');
    }

    public function accountAdvanced()
    {
        return view('Admin.AdvancedSettings.account');
    }
}
