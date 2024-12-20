<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    
    protected $fillable = ['user_id', 'items', 'total_amount',  'customer_phone_number', 'status', 'customer', 'price'];
}
