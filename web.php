<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\webcontroller;
use Illuminate\Support\Facades\Route;

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

// rooutes for admin

Route::get('/admin',[AdminController::class,'login']);
Route::get('/register',[AdminController::class,'register']);
Route::get('/admin-reset-password',[AdminController::class,'adminresetpassword']);
Route::get('/admin-dashboard',[AdminController::class,'admindashboard']);
Route::post('/admin-register',[AdminController::class,'adminregister']);
Route::post('/admin-login',[AdminController::class,'adminlogin']);


Route::get('/logout',[AdminController::class,'logout']);

Route::get('/manage-category',[AdminController::class,'managecategory']);
Route::get('/manage-color',[AdminController::class,'managecolor']);
Route::get('/manage-brand',[AdminController::class,'managebrand']);
Route::get('/manage-size',[AdminController::class,'managesize']);
Route::get('/manage-product',[AdminController::class,'manageproduct']);

Route::post('/add-category',[AdminController::class,'addcategory']);
Route::post('/category-data',[AdminController::class,'categorydata']);
Route::post('/get-single-category',[AdminController::class,'getsinglecategory']);
Route::post('/delete-category',[AdminController::class,'deletecategory']);

Route::post('/color-data',[AdminController::class,'colordata']);
Route::post('/add-color',[AdminController::class,'addcolor']);
Route::post('/get-single-color',[AdminController::class,'getsinglecolor']);
Route::post('/delete-color',[AdminController::class,'deletecolor']);

Route::post('/get-colorname',[AdminController::class,'getcolorname']);
Route::post('/get-all-data',[AdminController::class,'getalldata']);
Route::post('/add-brand',[AdminController::class,'addbrand']);
Route::post('/get-single-brand',[AdminController::class,'getsinglebrand']);
Route::post('/delete-brand',[AdminController::class,'deletebrand']);

Route::post('/get-brandname',[AdminController::class,'getbrandname']);
Route::post('/add-size',[AdminController::class,'addsize']);
Route::post('/get-all-size',[AdminController::class,'getallsize']);
Route::post('/get-single-size',[AdminController::class,'getsinglesize']);
Route::post('/delete-size',[AdminController::class,'deletesize']);

Route::post('/get-sizename',[AdminController::class,'getsizename']);
Route::post('/add-product',[AdminController::class,'addproduct']);
Route::post('/get-all-product',[AdminController::class,'getallproduct']);
Route::post('/get-single-product',[AdminController::class,'getsingleproduct']);
Route::post('/delete-product',[AdminController::class,'deleteproduct']);

Route::get('/add-product-data',[AdminController::class,'addproductdata']);
Route::get('/edit-product-data/{param1}',[AdminController::class,'editproductdata']);
Route::post('/update-product',[AdminController::class,'updateproduct']);



Route::get('/',[webcontroller::class,'home']);
Route::get('/product-detail',[webcontroller::class,'productdetail']);
Route::get('/wishlist',[webcontroller::class,'wishlist']);
Route::get('/cart',[webcontroller::class,'cart']);
Route::get('/product-detail/{param}',[webcontroller::class,'productdetails']);
Route::get('/show-all-data',[webcontroller::class,'showalldata']);
Route::get('/show-all-data/{param}',[webcontroller::class,'showalldatas']);
Route::get('/show-all-brand',[webcontroller::class,'showallbrand']);
Route::get('/show-all-brand/{param}',[webcontroller::class,'showallbrands']);
Route::post('/add-to-cart',[webcontroller::class,'addtocart']);
Route::post('/add-cart',[webcontroller::class,'addcart']);
Route::post('/delete-cart',[webcontroller::class,'deletecart']);
Route::get('/checkout',[webcontroller::class,'checkout']);
Route::post('/placeorder',[webcontroller::class,'placeorder']);
Route::post('/weblogin',[webcontroller::class,'weblogin']);
Route::get('/userlogin',[webcontroller::class,'userlogin']);
Route::get('/myorder',[webcontroller::class,'myorder']);
Route::post('/My_order',[webcontroller::class,'My_order']);
Route::post('/view-order-detail',[webcontroller::class,'view_order_detail']);
Route::get('/forget',[AdminController::class,'forget']);
Route::get('/otp',[AdminController::class,'otp']);
Route::get('/password',[AdminController::class,'password']);


Route::post('/send-otp',[AdminController::class,'send_otp']);
Route::post('/otp-success',[AdminController::class,'otp_success']);
Route::post('/change-password',[AdminController::class,'change_password']);



Route::get('/logoutuser',[webcontroller::class,'logoutuser']);

