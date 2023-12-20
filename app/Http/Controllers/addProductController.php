<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\seller;
use Illuminate\Support\Facades\DB;
class addProductController extends Controller
{
  public function addProductView()
  {
    $products = products::all();
    return view('vendor.addProduct', ['products' => $products]);
  }
  public function ProductDetailsView($id)
  {
     $product = products::find($id);
    return view('vendor.productDetails', ['product' => $product]);
  }

  public function ProductGridView()
  {
    $user = auth()->user();
    $seller = seller::find($user->id);
    $products = products::where('seller_id', $seller->id)->get();


    return view('vendor.grideProduct', ['products' => $products]);
  }

  public function ProductListView()
  {
    $user = auth()->user();
    $seller = seller::find($user->id);
    $products = products::where('seller_id', $seller->id)->get();

     
     return view('vendor.productsList', ['products' => $products] );
  }
 
  public function addProduct(Request $request)
  {
    $sellerId = seller::where('email', auth()->user()->email)->first()->id;

    foreach ($request->file('images') as $image) {
      $imageName = time() . '.' . $image->getClientOriginalExtension();
      $image->move(public_path('images/products'), $imageName);
 
      $image_data[] = $imageName;

  }
    products::create([
      'product_name' => $request->input('product_name'),
      'category' => $request->input('categories'),
      'slug' => $request->input('slug'),
      'size' => json_encode($request->input('size')),
      'colors' => json_encode($request->input('colors')), // Encode the array to JSON
      'price' => $request->input('price'),
      'full_detail' => $request->input('full_detail'),
      'stock' => $request->input('stock'),
      'quantity' => $request->input('stock'),
      'seller_id' => $sellerId,
      'image_data' => json_encode($image_data),
      'category_id' => $sellerId,
      'title' => $request->input('product_name'),
      'description' => $request->input('product_name'),

    ]);



    return redirect()->route('add-product-view');
  }

  public function deleteProduct($id)
{
     $product = products::find($id);
     $product->delete();
    return redirect()->route('productList');
}
}