<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'item', 'name', 'customer', 'items', 'price', 'payment', 'status', 'date'
    ];}
