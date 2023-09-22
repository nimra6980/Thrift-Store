<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('user/index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homes', [App\Http\Controllers\universal::class, 'homes'])->name('homes');
Route::get('/women', [App\Http\Controllers\universal::class, 'women'])->name('women');
Route::get('/men', [App\Http\Controllers\universal::class, 'men'])->name('men');
Route::get('/kid', [App\Http\Controllers\universal::class, 'kid'])->name('kid');
Route::get('/women_product', [App\Http\Controllers\universal::class, 'women_product'])->name('women_product');
Route::get('/dashboard', [App\Http\Controllers\universal::class, 'dashboard'])->name('dashboard');
Route::get('/order', [App\Http\Controllers\universal::class, 'order'])->name('order');
Route::get('/view_category', [App\Http\Controllers\ViewCategoryController::class, 'view_category'])->name('view_category');
Route::post('/add_category', [App\Http\Controllers\ViewCategoryController::class, 'store'])->name('add_category');
Route::get('/delete_category/{id}', [App\Http\Controllers\ViewCategoryController::class, 'delete_category'])->name('delete_category');
Route::get('/accessories', [App\Http\Controllers\universal::class, 'accessories'])->name('accessories');
route::get('/redirect',[HomeController::class,'redirect']);
Route::get('/view_product', [App\Http\Controllers\ProdouctController::class, 'index'])->name('view_product');
Route::get('/add_product', [App\Http\Controllers\ProdouctController::class, 'create'])->name('add_product');
Route::post('/insert_product', [App\Http\Controllers\ProdouctController::class, 'store'])->name('insert_product');
Route::get('/delete_product/{id}', [App\Http\Controllers\ProdouctController::class, 'delete_product'])->name('delete_product');

Route::get('/edit_product/{id}',[App\Http\Controllers\ProdouctController::class, 'edit_product'])->name('edit_product');

Route::put('/update/{id}', [App\Http\Controllers\ProdouctController::class, 'update'])->name('update');

Route::get('/product_details/{id}', [App\Http\Controllers\universal::class, 'product_details'])->name('product_details');
Route::post('/add_cart/{id}', [App\Http\Controllers\CartController::class, 'add_cart'])->name('add_cart');
Route::get('/deliverd/{id}', [App\Http\Controllers\DeliverdController::class, 'deliverd'])->name('deliverd');
Route::get('/show_cart', [App\Http\Controllers\CartController::class, 'show_cart'])->name('show_cart');

Route::get('/delete_cart/{id}', [App\Http\Controllers\CartController::class, 'delete_cart'])->name('delete_cart');
Route::get('/checkout', [App\Http\Controllers\OrderController::class, 'checkout'])->name('checkout');
Route::get('/cash', [App\Http\Controllers\OrderController::class, 'cash'])->name('cash');
Route::get('/stripe/{totalpirce}', [App\Http\Controllers\OrderController::class, 'stripe'])->name('stripe');
Route::get('/back_stripe', [App\Http\Controllers\OrderController::class, 'back_stripe'])->name('back_stripe');
Route::post('stripe/{totalpirce}', [App\Http\Controllers\OrderController::class, 'stripePost'])->name('stripe.post');
Route::get('/deliverd_show', [App\Http\Controllers\DeliverdController::class, 'deliverd_show'])->name('deliverd_show');
Route::get('/delete_deliverd/{id}', [App\Http\Controllers\DeliverdController::class, 'delete_deliverd'])->name('delete_deliverd');
Route::get('/cancelorders', [App\Http\Controllers\CancelController::class, 'cancelorders'])->name('cancelorders');
Route::get('/delete_cancelorder/{id}', [App\Http\Controllers\CancelController::class, 'delete_cancelorder'])->name('delete_cancelorder');
Route::get('/cancel/{id}', [App\Http\Controllers\CancelController::class, 'cancel'])->name('cancel');