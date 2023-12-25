<?php

namespace App\Http\Controllers;
use App\Models\products;


use App\Models\seller;
use Illuminate\Http\Request;

class SearchProductsController extends Controller
{

  public function storeView($id){
    dd($id);
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

      if ($searchType === 'product') {
    


         $selectedColors = $request->input('colors');
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
        $productName = $request->input('product_name');

        $seller->where('name', 'LIKE', "%{$productName}%");

        $rating = $request->input('sellerRating');
        if($rating == null) {
          $rating = 0;
        }
        if (!empty($selectedColors)) {
          $seller->where(function ($query) use ($selectedColors) {
              foreach ($selectedColors as $color) {
                  $query->orWhere('storeType', 'LIKE', "%{$color}%");
              }
          });
      }
        $products = products::all();
        return view('marketplace.searchSeller', ['products' => $products, 'seller' => Seller::where('rating', '>=', $rating)->get()]);
               

      } else {
          // Handle other cases
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
