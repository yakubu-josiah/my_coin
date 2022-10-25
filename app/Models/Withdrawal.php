<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    protected $fillabe = 
    [
        'user_id',
        'amount',
        'withdrawn',
        'status',
        'is_on',
        'is_recommit',
        'matured_date',
    ];
    use HasFactory;



    public static function availableWithdrawals($userID, $take=10, $offset=0){
        $currentTime = now();
        $configInfo = Configuration::first(); 
        return self::take($take)->offset($offset)
            ->select('withdrawals.*', 'users.first_name', 'users.last_name', 'users.photo', 'users.phone')
            ->whereRaw("withdrawals.user_id != '$userID' AND is_on='On' AND matured_date < '$currentTime' AND withdrawals.status != 'Cancelled' AND withdrawals.status!='Paid' AND 

                (amount > withdrawn OR amount > (SELECT SUM(orders.amount) FROM orders WHERE withdrawals.id=orders.withdrawal_id))")
            ->join('users', 'users.id', 'withdrawals.user_id')
            ->join('bank_info', 'bank_info.login_id', 'withdrawals.login_id')
            ->orderBy('withdrawals.matured_date', 'ASC')->get();
    }
}
