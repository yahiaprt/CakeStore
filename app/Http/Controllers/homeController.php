<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class homeController extends Controller
{
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