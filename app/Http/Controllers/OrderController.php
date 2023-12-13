<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\products;

class OrderController extends Controller
{
    public function orders()
    {
        
        $loggedInUser = auth()->user();

        // Check if a user is logged in
        if ($loggedInUser) {
            // Get the ID of the logged-in seller
            $logged_in_seller_id = auth()->user()->id;


            // Retrieve all orders
            $orders = Order::all();
    
            // Extract product IDs from the items column in orders
            $productIds = [];
            foreach ($orders as $order) {
                $items = json_decode($order->items, true);
                $productIds = array_merge($productIds, array_values($items));
            }
    
            // Remove duplicates to get unique product IDs
            $uniqueProductIds = array_unique($productIds);
    
            // Retrieve products associated with the logged-in seller and specified product IDs
            $products = products::where('seller_id', $logged_in_seller_id)
                ->whereIn('id', $uniqueProductIds)
                ->get();
 
         return view('vendor.orders', compact('orders'), compact('products'));
    
        }
    }
}