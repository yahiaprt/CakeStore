<?php

namespace App\Http\Controllers;
use AddIsSellerToUsersTable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use  App\Models\users;
use  App\Models\seller;
use Illuminate\Support\Facades\Auth;

 class usersListController extends Controller
{
    public function RoleSeller()
    {
        
        $loggedInUser = auth()->user();
 
        $user = users::find($loggedInUser->id);
        $user->update(['isSeller' => true]);
        
        // Update the isSeller column in the users table
        $loggedInUser->update(['isSeller' => true]);
    
        // Create a new seller using the logged-in user data
         $seller = seller::find($loggedInUser->id);

         if($seller == null) {
        

        seller::create([
            'id'=> $loggedInUser->id,
            'phone_number'=> $loggedInUser->phone_number,
            'first_name' => $loggedInUser->first_name,
            'last_name' => $loggedInUser->last_name,
            'name' => $loggedInUser->name,
            'email' => $loggedInUser->email,
            'birthdate' => $loggedInUser->birthdate,
            'address' => $loggedInUser->address,
            'password' => bcrypt($loggedInUser->password),
            'email_verified_at' => null,
            'remember_token' => null,
        ]);
    
    
        return view('layouts.admin');
    } else {
        return view('layouts.admin');
    }
      }
    public function RoleUser()
    {
        
        $user = Auth::user();
       
         
        return view('marketplace.home', ['user' => $user]);
      }
    public function loadUsersList()
    {
        
        $users = users::all();


        return view('backoffice.usersListPage', ['users' => $users]);
      }

      public function loadUserGrade()
      {
          
          $users = users::all();
  
  
          return view('backoffice.userGrade', ['users' => $users]);
        }

        public function loadVendorsList()
        {
            
            $seller = seller::all();
    
    
            return view('backoffice.vendorListe', ['seller' => $seller]);
          }

          
          public function loadVendorsGrade()
          {
              
              $seller = seller::all();
      
      
              return view('backoffice.vendorGrade', ['seller' => $seller]);
            }
      

      public function addUser(Request $request)
{
  
  
    users::create([
        'phone_number'=> $request->phone_number,
        'first_name' => $request->input('First_name'),
        'last_name' => $request->input('Last_name'),
        'name' => $request->input('userName'),
        'email' => $request->input('email'),
        'birthdate' => $request->input('birthdate'),
        'address' => $request->input('address'),
        'password' => bcrypt($request->input('password')), // Replace 'password' with the actual field name for the password input
        'email_verified_at' => null,
        'remember_token' => null,
    ]);
    

 return redirect()->route('load-users-list');
}

public function addSeller(Request $request)
{
  
  
    seller::create([
        'first_name' => $request->input('First_name'),
        'last_name' => $request->input('Last_name'),
        'name' => $request->input('userName'),
        'email' => $request->input('email'),
        'birthdate' => $request->input('birthdate'),
        'address' => $request->input('address'),
        'password' => bcrypt($request->input('password')), // Replace 'password' with the actual field name for the password input
        'email_verified_at' => null,
        'remember_token' => null,
    ]);
    

 return redirect()->route('load-vendor-list');
}


public function deleteVendor($email)
{
    $id = seller::where('email', $email)->first()->id;
    $seller = seller::find($id);
    $seller->delete();
    return redirect()->route('load-vendor-list');
}

public function deleteUser($email)
{
    $id = users::where('email', $email)->first()->id;
    $user = users::find($id);
    $user->delete();
    return redirect()->route('load-users-list');
}
    }