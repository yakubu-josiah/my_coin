<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferralCommission extends Model
{
    protected $fillabe = 
    [
        'user_id',
        'referree_id',
        'order_id',
        'amount',
        'bonus',
        'status',
		'remark',
    ];
    use HasFactory;
}
