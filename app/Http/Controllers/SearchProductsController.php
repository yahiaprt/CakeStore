<?php

namespace App\Http\Controllers;
use App\Models\products;


use App\Models\seller;
use Illuminate\Http\Request;

class SearchProductsController extends Controller
{
  public function return() {
    return redirect()->back();

  }
  public function rate(request $request){
     $rating = $request->input('rate');
      $id = $request->input('id');
      $product = products::find($id);
      $product->update([
        'rating' => $rating
    ]);
     return redirect()->back();
     }

     public function rateSeller(request $request){
      $rating = $request->input('rateSeller');
       $id = $request->input('id');
       $seller = seller::find($id);
        $seller->update([
         'rating' => $rating
     ]);
        return redirect()->back();
        }

  public function storeView($id){
     $seller = seller::find($id);
    $products = products::all();
    $products = $products->where('seller_id', $id);
    return view('marketplace.store',   ['seller' => $seller], ['products' => $products]);
   }


 public function searchmodalProductName($id){
  $product = products::find($id);
  return view('marketplace.searchProduct', ['product' => $product]);
 }
 
       
    public function searchProductName(Request $request)
    {


      $searchType = $request->input('searchType');
         $selectedColors = $request->input('colors');

      if ($searchType === 'product') {
    


         $products = products::query();
    
         $productName = $request->input('product_name');

         if ($selectedColors == 'all') {
            $products->where('product_name', 'LIKE', "%{$productName}%");

            return view('marketplace.searchProduct', ['products' => $products]);
        }
          if ($productName) {
            $products->where('product_name', 'LIKE', "%{$productName}%");
         }
         if (!empty($selectedColors)) {
            $products->where(function ($query) use ($selectedColors) {
                foreach ($selectedColors as $color) {
                    $query->orWhere('colors', 'LIKE', "%{$color}%");
                }
            });
        }
         $result = $products->get();
      } elseif ($searchType === 'seller') {
        $seller = seller::query();
        $productName = $request->input('search_query');
        
         $rating = $request->input('seller_rating');
        if($rating == null) {
          $rating = 0;
        }
        $seller = $seller->where('name', 'LIKE', "%{$productName}%")
    ->where('rating', '>=', $rating); // Assuming rating is a column in your database
         if (!empty($selectedColors)) {
          $seller = $seller->where(function ($query) use ($selectedColors) {
              foreach ($selectedColors as $color) {
                  $query->orWhere('store_type', 'LIKE', "%{$color}%");
              }
          });
 
      }
      $seller = $seller->get();

        $products = products::all();
          return view('marketplace.searchSeller', ['products' => $products, 'seller' => $seller]);
               

      }  


      return view('marketplace.searchProduct', ['products' => $result, 'searchType' => $searchType]); 
       }
    

     public function searchCategoryProductName($categoryType)
     {

         
 
         return view  ('marketplace.searchProduct', ['products' => products::where('colors', 'LIKE', "%{$categoryType}%")->get()]);

      }

      public function searchPriceProductName(Request $request) {

        $minPrice = $request->input("min_price");
        $maxPrice = $request->input("max_price");
        return view  ('marketplace.searchProduct', ['products' => products::whereBetween('price', [$minPrice, $maxPrice])->get()]);
      }

      public function searchRatingProductName(Request $request) {

         $rating = $request->input("rating");
            return view  ('marketplace.searchProduct', ['products' => products::where('rating', '>=', $rating)->get()]);
     
      }
    }
