<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Auth;
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
Route::resource('products', ProductController::class);

Route::get('/', function () {
    $products = \App\Models\Product::get();
//    return view('welcome', ['products'=>$products]);
    return view('index', compact('products'));
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile',    [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile',  [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/submit-order',    [OrderController::class,'submitOrder'])->name('submit.order');

});

Route::post('/change-language', [LanguageController::class,'changeLanguage'])->name('change.language');


// Маршруты для корзины
Route::get('/cart',                     [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{product}',      [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/remove/{cart}',    [CartController::class, 'removeFromCart'])->name('cart.remove');

require __DIR__.'/auth.php';


