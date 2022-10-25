<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillabe = 
    [
        'user_id',
        'withdrawal_id',
        'recmit_donotn_id',
        'is_comit',
        'amount',
        'interest',
        'paid',
        'total',
        'status',
        'withdrawal_status',
        'matured_date',
        'auto_merge_timer',
    ];
    use HasFactory;
}
