<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'withdrawal_id',
        'recmit_donotn_id',
        'payer_id',
        'payee_id',
        'amount',
        'interest',
        'total',
        'status',
        'auto_approve',
        'pop',
        'pop_date',
        'payer_message',
        'payee_message',
        'duration',
        'matured_date',
        'order_timer',
        'payee_timer',
        'date_paid',
    ];
    use HasFactory;



}
