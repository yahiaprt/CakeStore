<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    use HasFactory;

    protected $table = 'seller';

    protected $fillable = [
        'id', // This is the foreign key to the users table
        'first_name',
        'last_name',
        'name',
        'email',
        'birthdate',
        'address',
        'password',
        'phone_number',
        'email_verified_at',
        'remember_token',
        'created_at',
        'updated_at',
        'description',
        'opening_time',
        'closing_time',
        'store_name',
        'rating',
        'store_image',
        'store_type'
    ];
    
}
