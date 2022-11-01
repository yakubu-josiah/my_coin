<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use App\Models\Auction;
use App\Models\AuctionPackage;
use App\Models\Configuration;
use App\Models\Currency;
use App\Models\Package;
use App\Models\Withdrawal;


class AuctionController extends Controller
{

    // public function index(){
    //     $packages = Package::get();

    //     $limit = 10;
    //     $offset = 0;
    //     $loginID = $this->auth()->login_id;

    //     $withdrawals = Withdrawal::availableWithdrawals($loginID, $limit, $offset);
    //     $aCounts = WithdrawalsTbl::availableWithdrawalCounts($loginID);

    //     $withdrawalsWrap = array();
    //     foreach ($withdrawals as $w) {
    //         $wSumOrder = OrderTbl::sumWtihdrawalOrder($w->id);
    //         $withdrawalBal = $w->amount - $wSumOrder; 
    //         if ($withdrawalBal > 0) {
    //             $w['amount'] = $withdrawalBal;
    //             $w['user'] = User::singleByID($w->login_id);
    //             $w['bankInfo'] = BankInfo::userAccounts($w->login_id);
    //             $w['auctionSum'] = WithdrawalsTbl::availableWithdrawalSum();
    //             array_push($withdrawalsWrap, $w);
    //         }
    //     }
        
    //     return view('User.AuctionMenu.viewAuction', [
    //         'auctions' => $withdrawalsWrap,
    //         'curr' => Currency::getDefault(),
    //         'packages' => Package::where('status', 1)->get(),
    //         'config' => Configuration::first(),
    //     ]);
    // }
}
