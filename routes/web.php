<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CheckoutStripeController;
use App\Http\Controllers\CheckoutSuccessController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//   return view('welcome');
// });

Auth::routes([
    'verify' => true,
]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/store', [ProductController::class, 'index'])->name('store');

Route::get('/details/{id}', [DetailsController::class, 'index'])->name('store.details');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart');

    Route::put('/cart', [CartController::class, 'store'])->name('cart.store');

    Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

    Route::put('/cart/{id}', [CartController::class, 'update'])->name('cart.update');

    Route::get('/mail-testing', [MailController::class, 'index']);

    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

    Route::post('/checkout/stripe', CheckoutStripeController::class)->name('checkout.stripe');

    Route::get('/checkout/success/{payment}/{id}', CheckoutSuccessController::class)->name('checkout.success');

    Route::view('/thanks', 'template_pages/thanks');

    Route::post('/checkout/points', [CheckoutController::class, 'points'])->name('checkout.points');
});
