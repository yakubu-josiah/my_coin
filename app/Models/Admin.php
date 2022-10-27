<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $guard = "admin";

    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'password',
        'email',
        'email_verify'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}