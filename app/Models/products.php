<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    protected $fillable = [
        'product_name',
        'category',
        'slug',
        'size', // Assuming 'size' is stored as an array in the database
        'colors', // Assuming 'colors' is stored as an array in the database
        'price',
        'full_detail',
        'quantity',
        'seller_id',
        'image_data',
        'purchased_number',
        'stock'
        ,'category_id'
        ,'title'
        ,'description',
        'rating'
        // Add other attributes as needed
    ];
 
 
}
