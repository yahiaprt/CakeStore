<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\Auth;

use App\Models\product;
use App\Models\Order;

class homeController extends Controller
{
  public function insertProducts(Request $request)
  {
    $productList = json_decode($request->input('listOfProducts'));

    $total = $request->input('total_hidden');
    Order::create([
        'user_id' => auth()->user()->id,
        'items' => json_encode($productList), // Convert array to JSON string
        'total_amount' => $total,
        'customer_name' => '$customerName', // Include the 'customer_name' in the insert
        'status' => 'pending',
        'customer_phone_number' => '$customerPhoneNumber', // Include the 'customer_phone_number' in the insert
    ]);
    return view('marketplace.home');
  }
    public function homeView()
  {
    return view('marketplace.home');
  }

  public function searchProduct($request)
  {
    $productName = $request->input('product_name');

    return view('marketplace.searchProduct');
 
   }

 
}