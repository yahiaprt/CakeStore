<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\products;


use Illuminate\Http\Request;

class SearchProductsController extends Controller
{

 
    public function searchProductName(Request $request)
    {
         $selectedColors = $request->input('colors');
         $products = Product::query();
    
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

          return view('marketplace.searchProduct', ['products' => $result]);
    }
    

     public function searchCategoryProductName($categoryType)
     {

         
 
         return view  ('marketplace.searchProduct', ['products' => Product::where('colors', 'LIKE', "%{$categoryType}%")->get()]);

      }

      public function searchPriceProductName(Request $request) {

        $minPrice = $request->input("min_price");
        $maxPrice = $request->input("max_price");
        return view  ('marketplace.searchProduct', ['products' => Product::whereBetween('price', [$minPrice, $maxPrice])->get()]);
      }

      public function searchRatingProductName(Request $request) {

         $rating = $request->input("rating");
            return view  ('marketplace.searchProduct', ['products' => Product::where('rating', '>=', $rating)->get()]);
     
      }
    }
