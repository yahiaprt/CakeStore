<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
  

    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'email',
        'birthdate',
        'address',
        'password',
        'isSeller',
        'phone_number',
        'email_verified_at',
        'remember_token',
        'created_at',
        'updated_at'
    ];
}
