<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillabe = 
    [
        'min_amount',
        'roi',
        'duration',
        'guaranteed',
        'status',
    ];
    use HasFactory;
}
