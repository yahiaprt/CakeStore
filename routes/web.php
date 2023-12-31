<?php

use App\Http\Controllers\addProduct;
use App\Http\Controllers\addProductController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchProductsController;
use App\Http\Controllers\sellerProfilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\usersListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', [adminDashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/load-users-list', [usersListController::class, 'loadUsersList'])->name('load-users-list');
Route::get('/load-user-grade', [usersListController::class, 'loadUserGrade'])->name('load-user-grade');
Route::get('/load-vendor-grade', [usersListController::class, 'loadVendorsGrade'])->name('load-vendor-grade');
Route::get('/load-vendor-list', [usersListController::class, 'loadVendorsList'])->name('load-vendor-list');
Route::get('/orders', [OrderController::class, 'orders'])->name('orders');


Route::get('/RoleUser', [usersListController::class, 'RoleUser'])->name('Role');
Route::get('/RoleSeller', [usersListController::class, 'RoleSeller'])->name('Role');



Route::post('/Add-Product', [addProductController::class, 'addProduct'])->name('add-product');
Route::get('/Add-Product-view', [addProductController::class, 'addProductView'])->name('add-product-view');
Route::get('/productList', [addProductController::class, 'productListView'])->name('productList');
Route::get('/productGrid', [addProductController::class, 'productGridView'])->name('productGrid');
Route::get('/productDetails/{id}', [addProductController::class, 'productDetailsView'])->name('productDetails');
Route::get('/sellerProfil', [sellerProfilController::class, 'sellerProfileView'])->name('sellerProfileView');
Route::get('/productsList/{id}', [sellerProfilController::class, 'productsList'])->name('productsList');
 Route::post('/insert-products', [homeController::class, 'insertProducts'])->name('insertProducts');;


Route::get('/home', [homeController::class, 'homeView'])->name('home');
Route::get('/searchProductName', [SearchProductsController::class, 'searchProductName'])->name('searchProductName');
Route::get('/searchCategoryProductName{type}', [SearchProductsController::class, 'searchCategoryProductName'])->name('searchCategoryProductName');
Route::post('/searchPriceProductName', [SearchProductsController::class, 'searchPriceProductName'])->name('searchPriceProductName');
Route::post('/searchRatingProductName', [SearchProductsController::class, 'searchRatingProductName'])->name('searchRatingProductName');
Route::get('/searchmodalProductName/{id}', [SearchProductsController::class, 'searchmodalProductName'])->name('searchmodalProductName');
Route::get('/store/{id}', [SearchProductsController::class, 'storeView'])->name('store');




Route::get('/searchProduct', [SearchProductsController::class, 'searchProduct'])->name('searchProduct');


 
 

Route::post('/load-users-list', [usersListController::class, 'addUser'])->name('user.addUser');
Route::post('/load-vendor-list', [usersListController::class, 'addSeller'])->name('seller.addVendor');
Route::post('/sellerProfile', [sellerProfilController::class, 'upadateProfile'])->name('sellerProfile');
Route::post('/sellerProfileSeller', [sellerProfilController::class, 'upadateSellerProfile'])->name('upadateSellerProfile');


Route::get('/load-users-list/delete/{email}', [usersListController::class, 'deleteUser'])->name('user.deleteUser');
Route::get('/load-vendors-list/delete/{email}', [usersListController::class, 'deleteVendor'])->name('user.deleteVendor');
Route::get('/productList/delete/{id}', [addProductController::class, 'deleteProduct'])->name('deleteProduct');




require __DIR__.'/auth.php';
