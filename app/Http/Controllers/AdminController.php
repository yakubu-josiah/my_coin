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
}
