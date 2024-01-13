<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seller;
use App\Models\products;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\users;
class sellerProfilController extends Controller
{

  

  public function ordersCustomer(){
    
    $orders = Order::where('user_id', auth()->user()->id)->get();
    $products = products::all();

      return view('marketplace.ordersCustomer',   ['orders' => $orders], ['products' => $products] );
  }
   public function productsList($id){
    
      $seller = seller::find($id);
      $products = products::all();
        return view('marketplace.productsList',   ['seller' => $seller], ['products' => $products]);
    }
    public function sellerProfileView()
    {
        $user = auth()->user();
        $seller = seller::find($user->id);
        return view('vendor.sellerProfil', compact('seller'));
    }


    public function upadateSellerProfile(Request $req) {
      $user = auth()->user();
      $seller = seller::find($user->id);


      $seller -> update(['closing_date' => $req->input('closing_date')]);
        $seller -> update(['opening_date' => $req->input('opening_date')]);
        $seller -> update(['store_name' => $req->input('store_name')]);
        $seller -> update(['description' => $req->input('description')]);
        
      return view('vendor.sellerProfil', compact('seller'));

}

 

    public function upadateProfile(Request $req) {
          $user = auth()->user();
          $seller = seller::find($user->id);
 
          if($req->input('email') != null)   
          $seller -> update(['email' => $req->input('email')]);
          if($req->input('phone_number') != null)
            $seller -> update(['phone_number' => $req->input('phone_number')]);
            if($req->input('first_name') != null)
            $seller -> update(['first_name' => $req->input('first_name')]);
            if($req->input('last_name') != null)
            $seller -> update(['last_name' => $req->input('last_name')]);
            if($req->input('phone_number') != null)
            $seller -> update(['phone_number' => $req->input('phone_number')]);

            if($req->input('closing_time') != null)

            $seller -> update(['closing_time' => $req->input('closing_time')]);
            if($req->input('opening_time') != null)
            $seller -> update(['opening_time' => $req->input('opening_time')]);
            if($req->input('store_name') != null)
            $seller -> update(['store_name' => $req->input('store_name')]);
            if($req->input('description') != null)
            $seller -> update(['description' => $req->input('description')]);
            if($req->input('address') != null)
            $seller -> update(['address' => $req->input('address')]);

            
            return back()->with('success', 'Profil Update was successful!');

    }

    public function upadateUserProfile(Request $req) {
      $user = auth()->user();
      $user = users::find($user->id);

      if($req->input('email') != null)   
      $user -> update(['email' => $req->input('email')]);
      if($req->input('phone_number') != null)
      $user -> update(['phone_number' => $req->input('phone_number')]);
        if($req->input('first_name') != null)
        $user -> update(['first_name' => $req->input('first_name')]);
        if($req->input('last_name') != null)
        $user -> update(['last_name' => $req->input('last_name')]);
        if($req->input('phone_number') != null)
        $user -> update(['phone_number' => $req->input('phone_number')]);

        if($req->input('closing_time') != null)

        $user -> update(['closing_time' => $req->input('closing_time')]);
        if($req->input('opening_time') != null)
        $user -> update(['opening_time' => $req->input('opening_time')]);
        if($req->input('store_name') != null)
        $user -> update(['store_name' => $req->input('store_name')]);
        if($req->input('description') != null)
        $user -> update(['description' => $req->input('description')]);
        if($req->input('address') != null)
        $user -> update(['address' => $req->input('address')]);
      

        $req->validate([
          'coverImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust as needed
          // Other validation rules for other form fields
      ]);
  
      // Handle file upload
      $imageName = time() . '.' . $req->coverImage->extension();
      $req->coverImage->move(public_path('images'), $imageName);
  
      // Save file name to the database
       $user->update(['users_images' => $imageName]);       
        
        return redirect()->back()->with('success', 'Profil Update was successful!');

}
}
