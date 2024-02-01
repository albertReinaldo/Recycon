<?php

use App\Http\Controllers\addProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\deleteProductController;
use App\Http\Controllers\editController;
use App\Http\Controllers\editProductController;
use App\Http\Controllers\editProfileController;
use App\Http\Controllers\historyController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\showProductController;
use App\Http\Controllers\viewItemController;
use App\Http\Middleware\checkLogin;
use App\Http\Middleware\roleCheck;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', function () {
     return view('home');
 });

Route::get('/home',[homeController::class,'index'])->name('home');
Route::get('/home/customer',[homeController::class,'indexCustomer'])->name('home-customer')
->middleware(checkLogin::class);
Route::get('/home/admin',[homeController::class,'indexAdmin'])->name('home-admin')
->middleware(checkLogin::class)->middleware([roleCheck::class]);

Route::get('/register',[registerController::class,'index'])->name('register');
Route::post('/register',[registerController::class,'registerLogic'])->name('register-logic');

Route::get('/login',function () {
    return view('login');
})->name('login-page');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/showProduct/admin',[showProductController::class,'indexAdmin'])->name('show-product-admin')
->middleware(checkLogin::class)->middleware([roleCheck::class]);
Route::get('/showProduct/admin/search',[showProductController::class,'productSearchAdmin'])->name('product-admin-search')
->middleware(checkLogin::class)->middleware([roleCheck::class]);
Route::get('/showProduct/admin/{id}',[showProductController::class,'productDetailAdmin'])->name('product-detail-admin')
->middleware(checkLogin::class)->middleware([roleCheck::class]);

Route::get('/showProduct/customer',[showProductController::class,'indexCustomer'])->name('show-product-customer')
->middleware(checkLogin::class);
Route::get('/showProduct/customer/search',[showProductController::class,'productSearchCustomer'])->name('product-customer-search')
->middleware(checkLogin::class);
Route::get('/showProduct/customer/{id}',[showProductController::class,'productDetailCustomer'])->name('product-detail-customer')
->middleware(checkLogin::class);

Route::get('/showProduct',[showProductController::class,'index'])->name('show-product');
Route::get('/showProduct/{id}',[showProductController::class,'productDetail'])->name('product-detail');

Route::get('/addProduct',[addProductController::class,'index'])->name('add-product')
->middleware(checkLogin::class)->middleware([roleCheck::class]);
Route::post('/addProduct',[addProductController::class,'addLogic'])->name('add-product-logic')
->middleware(checkLogin::class)->middleware(roleCheck::class);

Route::get('/editProfile/customer/{id}',[editProfileController::class,'editProfileCustomer'])->name('edit-profile-customer')
->middleware(checkLogin::class);
Route::get('/editProfile/admin/{id}',[editProfileController::class,'editProfileAdmin'])->name('edit-profile-admin')
->middleware(checkLogin::class)->middleware(roleCheck::class);
Route::patch('/editProfile/{id}',[editProfileController::class,'editProfile'])->name('edit-profile-logic')
->middleware(checkLogin::class);

Route::get('/changePassword/customer/{id}',[editProfileController::class,'changePasswordCustomer'])->name('change-password-customer')
->middleware(checkLogin::class);
Route::get('/changePassword/admin/{id}',[editProfileController::class,'changePasswordAdmin'])->name('change-password-admin')
->middleware(checkLogin::class)->middleware(roleCheck::class);
Route::put('/changePassword',[editProfileController::class,"changePassword"])->name('change-password-logic')
->middleware(checkLogin::class);

Route::get('/viewItem',[viewItemController::class,'index'])->name('view-item');

Route::get('/editProduct/{id}',[editProductController::class,'productEditForm'])->name('product-edit-form')
->middleware(checkLogin::class)->middleware([roleCheck::class]);
Route::put('/editProduct/{id}',[editProductController::class,'productEditLogic'])->name('product-edit-logic')
->middleware(checkLogin::class)->middleware([roleCheck::class]);

Route::get('/deleteProduct/{id}',[deleteProductController::class,'deleteLogic'])->name('product-delete')
->middleware(checkLogin::class)->middleware([roleCheck::class]);

Route::get('/myCart/{id}',[cartController::class,'index'])->name('view-cart')
->middleware(checkLogin::class);
Route::post('/myCart/{userId}/{ItemID}',[cartController::class,'insertCart'])->name('insert-cart')
->middleware(checkLogin::class);
Route::get('/myCart/delete/{userId}/{id}',[cartController::class,'deleteCart'])->name('delete-cart')
->middleware(checkLogin::class);
Route::get('/showProduct/customer/update/{ItemID}/{id}',[showProductController::class,'productDetailCustomerUpdate'])->name('product-detail-customer')
->middleware(checkLogin::class);
Route::patch('/myCart/update/{ItemID}/{id}',[cartController::class,'updateCart'])->name('update-cart')
->middleware(checkLogin::class);

Route::get('/transactionHistory/{id}',[historyController::class,'index'])->name('view-transaction')
->middleware(checkLogin::class);
Route::POST('/history/{userId}',[historyController::class,'insertHistory'])->name('insert-history')
->middleware(checkLogin::class);
