<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
 

// Route::get('/settings/profile', [ProfileController::class, 'edit'])->name('settings.profile');
Route::get('/', [HomepageController::class, 'index'])->name('home');
Route::get('products', [HomepageController::class, 'products']);
Route::get('product/{slug}', [HomepageController::class, 'product']);
Route::get('categories',[HomepageController::class, 'categories']);
Route::get('category/{slug}', [HomepageController::class, 'category']);
Route::get('cart', [HomepageController::class, 'cart']);
Route::get('checkout', [HomepageController::class, 'checkout']);

Route::group(['prefix'=>'dashboard'], function(){ 
    Route::get('/',[DashboardController::class,'index'])->name('dashboard'); 
  
    Route::resource('categories',ProductCategoryController::class);
    Route::resource('products',ProductController::class);
    
 })->middleware(['auth', 'verified']);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::resource('dashboard/categories',ProductCategoryController::class);


// Route::get('/promo', function () {
//     return ('Ini Adalah Halaman Promo dan Penawaran Khusus');
// });

// Route::get('/flash-sale', function () {
//     return ('Ini Adalah Halaman Flash sale');
// });

// Route::get('/c/elektronik', function () {
//     return ('Ini Adalah Halaman Elektronik');
// });

// Route::get('/c/fashion-pria', function () {
//     return ('Ini Adalah Halaman Fashion Pria');
// });

// Route::get('/c/kesehatan-kecantikan', function () {
//     return ('Ini Adalah Halaman Kesehatan dan Kecantikan');
// });

// Route::get('/p/asus-rog', function () {
//     return ('Ini Adalah Halaman Detail Produk Asus ROG');
// });

// Route::get('/log', function () {
//     return ('Ini Adalah Halaman Login');
// });

// Route::get('/register', function () {
//     return ('Ini Adalah Halaman Register');
// });

// Route::get('/account/profile', function () {
//     return ('Ini Adalah Halaman Profile Penggua');
// });

// Route::get('/account/orders', function () {
//     return ('Ini Adalah Halaman Daftar Pesanan Pengguna');
// });

// Route::get('/payment', function () {
//     return ('Ini Adalah Halaman Pembayaran');
// });

// Route::get('/order-tracking', function () {
//     return ('Ini Adalah Halaman Cek Status Pesanan');
// });

// Route::get('/voucher', function () {
//     return ('Ini Adalah Halaman Voucher dan Diskon');
// });

// Route::get('/help', function () {
//     return ('Ini Adalah Halaman Pusat Bantuan');
// });
 
// Route::get('/contact-us', function () {
//     return ('Ini Adalah Halaman Hubungi Blibli');
// });

// Route::get('/returns-refunds', function () {
//     return ('Ini Adalah Halaman  Pengembalian & pengembalian dana');
// });

// Route::get('/seller/register', function () {
//     return ('Ini Adalah Halaman Daftar sebagai penjual');
// });

Route::get('/seller/dashboard', function () {
    return ('Ini Adalah Halaman  Dashboard penjual');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
Route::middleware(['auth'])->group(function () {
        Route::redirect('settings', 'settings/profile');
        Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
        Volt::route('settings/password', 'settings.password')->name('settings.password');
        Volt::route('settings/appearance',
       'settings.appearance')->name('settings.appearance');
       });
       
require __DIR__.'/auth.php';
