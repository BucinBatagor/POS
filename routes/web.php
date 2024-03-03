<?php

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

Route::get('/home', function(){
    return view('home');
});

Route::get('/category', function(){
    return view('category');
});

Route::get('/user', function (){
    return view('user', ['id' => '01', 'name' => 'Nizar Khawarizmi']);
});

Route::get('/transaction', function(){
    return view('transaction');
});

Route::get('/FB', function(){
    return view('FB');
});

Route::get('/BH', function(){
    return view('BH');
});

Route::get('/HC', function(){
    return view('HC');
});

Route::get('/BK', function(){
    return view('BK');
});