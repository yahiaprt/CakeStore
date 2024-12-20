<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\Auth;

use App\Models\product;
use App\Models\Order;
use App\Models\seller;
use App\Models\users;

class homeController extends Controller
{

public function userSettings(){
  $user = Auth::user();

  if($user != null) {

  return view('marketplace.CustomerProfil', compact('user'));
  } else {
    return view('auth.register');
  }  

}
   public function insertProducts(Request $request)
  {
    $productList = json_decode($request->input('listOfProducts'));
    $user = Auth::user();
    $CustomerName = $user->name;
    $customerPhoneNumber = $user->phone_number;
     $total = $request->input('total_hidden');
if (!empty($productList)) {
   $firstProduct = products::where('product_name', $productList[0]->title)->first();

  $seller_id = $firstProduct->seller_id;
  // Now $firstProduct contains the first product in the list
  // You can use $firstProduct as needed
 } 
     Order::create([
        'user_id' => auth()->user()->id,
        'items' => json_encode($productList), // Convert array to JSON string
        'total_amount' => $total,
        'customer' => $CustomerName, // Include the 'customer_name' in the insert
        'status' => 'pending',
        'price' => $seller_id,
        'customer_phone_number' => $customerPhoneNumber, // Include the 'customer_phone_number' in the insert
    ]);

   $products = products::where('rating', '=', 5)->get();
    $seller = seller::where('rating', '=', 5)->get();
    return view('marketplace.home', compact('user'), compact('products', 'seller'));
  }
    public function homeView()
  {
    $user = Auth::user();
    $products = products::all();
    $products = products::where('rating', '=', 5)->get();
    $seller = seller::where('rating', '=', 5)->get();
    
    return view('marketplace.home', compact('user'), compact('products', 'seller'));
  }
 
  public function searchProduct($request)
  {
    $productName = $request->input('product_name');

    return view('marketplace.searchProduct');
 
   }

 
}