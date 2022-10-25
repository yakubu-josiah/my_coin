<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankInfo extends Model
{
    protected $fillabe = 
    [
        'user_id',	
        'account_name',
        'account_number',
        'bank',        
        'account_type',
        'currency',
    ];
    
    use HasFactory;
}
