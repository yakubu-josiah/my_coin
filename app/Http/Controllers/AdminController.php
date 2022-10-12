<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.index');
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
}
