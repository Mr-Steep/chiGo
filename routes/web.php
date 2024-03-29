<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\WishlistController;
use App\Livewire\Wishlist;
use App\Models\Category;
use App\Services\AppService;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

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
    $categories = AppService::buildCategoryTree(Category::all());
    return view('index', compact('categories'));
})->name('home');


Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index');


Route::middleware('auth')->group(function () {
    Route::get('/profile',    [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile',  [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::post('/order/create',           [OrderController::class,'create'])->name('order.create');
    Route::delete('/order/remove/{order}', [OrderController::class,'remove'])->name('order.delete');
    Route::get('/order/{order}',          [OrderController::class,'index'])->name('order.index');

    Route::resource('addresses', AddressController::class);


    Route::resource('dashboard', DashboardController::class);
    Route::get('dashboard/orders/{order}', [DashboardController::class, 'orderShow'])->name('dashboard.order.show');


});

Route::post('/change-language', [LanguageController::class,'changeLanguage'])->name('change.language');
Route::get('confirm-order/{order}',[OrderController::class,'confirmOrder'])->middleware(['signed', 'throttle:6,1'])->name('confirm_order');


// Маршруты для корзины
Route::get('/cart',                     [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{product}',      [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/remove/{cart}',    [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/addresses/add',    [CartController::class, 'storeNoAuth'])->name('cart.address.add');


Route::resource('wishlist', WishlistController::class);


Route::view('/about', 'about.index')->name('about');
Route::view('/contact', 'contact.index')->name('contact');
Route::view('/faq', 'faq.index')->name('faq');
Route::view('/tracking', 'tracking.index')->name('tracking');

require __DIR__.'/auth.php';


