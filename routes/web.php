<?php

// use Illuminate\Support\Facades\Route;
// use Livewire\Volt\Volt;

Route::get('/', function(){
    $title = "Homepage";
   
    return view('web.homepage',['title'=>$title]);
   });
   Route::get('products', function(){
    $title = "Products";
    return view('web.products',['title'=>$title]);
   });
   Route::get('product/{slug}', function($slug){
    $title = "Single Product";
    return view('web.single_product',['title'=>$title,'slug'=>$slug]);
   });
   Route::get('categories', function(){
    $title = "Categories";
    return view('web.categories',['title'=>$title]);
   });
   
   Route::get('category/{slug}', function($slug){
    $title = "Single Category";
    return view('web.single_category',['title'=>$title,'slug'=>$slug]);
   });
   Route::get('cart', function(){
    $title = "Cart";
    return view('web.cart',['title'=>$title]);
   });
   Route::get('checkout', function(){
    $title = "Checkout";
    return view('web.checkout',['title'=>$title]);
   });

Route::get('/promo', function () {
    return ('Ini Adalah Halaman Promo dan Penawaran Khusus');
});

Route::get('/flash-sale', function () {
    return ('Ini Adalah Halaman Flash sale');
});

Route::get('/c/elektronik', function () {
    return ('Ini Adalah Halaman Elektronik');
});

Route::get('/c/fashion-pria', function () {
    return ('Ini Adalah Halaman Fashion Pria');
});

Route::get('/c/kesehatan-kecantikan', function () {
    return ('Ini Adalah Halaman Kesehatan dan Kecantikan');
});

Route::get('/p/asus-rog', function () {
    return ('Ini Adalah Halaman Detail Produk Asus ROG');
});

Route::get('/log', function () {
    return ('Ini Adalah Halaman Login');
});

Route::get('/register', function () {
    return ('Ini Adalah Halaman Register');
});

Route::get('/account/profile', function () {
    return ('Ini Adalah Halaman Profile Penggua');
});

Route::get('/account/orders', function () {
    return ('Ini Adalah Halaman Daftar Pesanan Pengguna');
});

Route::get('/payment', function () {
    return ('Ini Adalah Halaman Pembayaran');
});

Route::get('/order-tracking', function () {
    return ('Ini Adalah Halaman Cek Status Pesanan');
});

Route::get('/voucher', function () {
    return ('Ini Adalah Halaman Voucher dan Diskon');
});

Route::get('/help', function () {
    return ('Ini Adalah Halaman Pusat Bantuan');
});
 
Route::get('/contact-us', function () {
    return ('Ini Adalah Halaman Hubungi Blibli');
});

Route::get('/returns-refunds', function () {
    return ('Ini Adalah Halaman  Pengembalian & pengembalian dana');
});

Route::get('/seller/register', function () {
    return ('Ini Adalah Halaman Daftar sebagai penjual');
});

Route::get('/seller/dashboard', function () {
    return ('Ini Adalah Halaman  Dashboard penjual');
});

require __DIR__.'/auth.php';
