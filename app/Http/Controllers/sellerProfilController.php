<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seller;
class sellerProfilController extends Controller
{
   
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

            
          return view('vendor.sellerProfil', compact('seller'));

    }
}
