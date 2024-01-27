<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\seller;
use App\Models\users;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
class addProductController extends Controller
{

   public function dashboardStat()
  {
    $users = users::take(7)->get();
    $products = products::all();
    $sellers = Seller::all();
    $orders = Order::take(7)->get();

    return view('vendor.dashboradstat', compact('products', 'sellers', 'orders', 'users'));
  }
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
    $orders = DB::table('orders')->where('price', $user->id)->get();
 
    return view('vendor.grideProduct', ['products' => $products], ['orders' => $orders]);
  }

  public function ProductListView()
  {
    $user = auth()->user();
    $seller = seller::find($user->id);
    $products = products::where('seller_id', $seller->id)->get();
     $orders = DB::table('orders')->where('price', $user->id)->get();
     $users = users::all();
     return view('vendor.productsList', compact('products', 'orders', 'users'));
    }
  public function addProduct(Request $request)
  {
    $sellerId = seller::where('email', auth()->user()->email)->first()->id;
    if ($request->hasFile('images')) {
      $image_data = [];

      foreach ($request->file('images') as $key => $image) {
          // Validate the file type
          $extension = $image->getClientOriginalExtension();
          $allowedExtensions = ['png', 'jpg', 'jpeg'];

          if (!in_array($extension, $allowedExtensions)) {
              // Handle invalid file type error
              return redirect()->back()->with('error', 'Invalid file type. Please upload PNG, JPG, or JPEG images.');
          }

          // Generate a unique name for each image
          $imageName = time() . '_' . $key . '.' . $extension;

          // Move the image to the desired directory
          $image->move(public_path('images/products'), $imageName);

          $image_data[] = $imageName;
      }


    products::create([
      'product_name' => $request->input('product_name'),
      'category' => '',
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
  }

  public function update(Request $request)
  {
      // Validate request data
     
  
      // Find the product by its ID (you need to replace 'Product' with your actual model class)
      $product = products::find($request->input('product_id'));
  
      if (!$product) {
          // Handle the case where the product is not found
          return redirect()->back()->with('error', 'Product not found.');
      }
       // Handle image upload if images are present
      if ($request->hasFile('images')) {
          $image_data = [];
  
          foreach ($request->file('images') as $key => $image) {
              // Validate the file type
              $extension = $image->getClientOriginalExtension();
              $allowedExtensions = ['png', 'jpg', 'jpeg'];
  
              if (!in_array($extension, $allowedExtensions)) {
                  // Handle invalid file type error
                  return redirect()->back()->with('error', 'Invalid file type. Please upload PNG, JPG, or JPEG images.');
              }
  
              // Generate a unique name for each image
              $imageName = time() . '_' . $key . '.' . $extension;
  
              // Move the image to the desired directory
              $image->move(public_path('images/products'), $imageName);
  
              $image_data[] = $imageName;
          }
  
          // Update the product with image data
          $product->update([
              'image_data' => json_encode($image_data),
          ]);
      }
  
      // Define default values for specific fields
      $defaults = [
          'size' => json_encode([]), // Set default value for 'size' if null
          'colors' => json_encode([]), // Set default value for 'colors' if null
          'price' => 0, // Set default value for 'price' if null
          'full_detail' => '', // Set default value for 'full_detail' if null
          // Add more fields with default values as needed
          'slug' => '',
          



      ];
      if($request->input('slug')== null) {
        $defaults['slug'] = $request->input('product_name');
      }
  
      // Merge default values with the request data
      $requestData = array_merge($defaults, $request->all());
  
      // Update other product details with merged request data
      $product->update([
          'product_name' => $requestData['product_name'],
          'category' => '',
          'slug' => $requestData['slug'],
          'size' => json_encode($requestData['size']),
          'colors' => json_encode($requestData['colors']),
          'price' => $requestData['price'],
          'full_detail' => $requestData['full_detail'],
          'stock' => $requestData['stock'],
          'quantity' => $requestData['stock'], // Check if this is correct
          'category_id' => '2',
          'title' => $requestData['product_name'],
          'description' => $requestData['product_name'],
      ]);
  
      return redirect()->route('productList');
  }
   
    public function deleteProduct($id)
{
     $product = products::find($id);
     $product->delete();
    return redirect()->route('productList');
}
}
