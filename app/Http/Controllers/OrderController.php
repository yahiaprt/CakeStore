<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();
        $cartItems = $request->input('cartItems');

        // Calculate total amount from your cart items
        $totalAmount = 0;

        foreach ($cartItems as $cartItem) {
            $totalAmount += $cartItem['quantity'] * $cartItem['price'];
        }

        $order = Order::create([
            'user_id' => $user->id,
            'total_amount' => $totalAmount,
            'products' => collect($cartItems)->pluck('product_id')->toArray(),
        ]);

        // Assuming you have an OrderItem model to store individual items in the order
        foreach ($cartItems as $cartItem) {
            $order->items()->create([
                'product_id' => $cartItem['product_id'],
                'quantity' => $cartItem['quantity'],
                'price' => $cartItem['price'],
            ]);
        }

        // Clear the cart after creating the order

        return response()->json(['message' => 'Order placed successfully']);
    }
}
