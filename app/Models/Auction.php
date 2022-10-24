<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    protected $fillable = [
        'amount',
        'received',
        'status',
        'is_on',
        'is_recommit',
        'matured_date'
    ];
    use HasFactory;
}
