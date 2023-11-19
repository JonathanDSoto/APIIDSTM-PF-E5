<?php

use App\Models\reservation;
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


Route::get('/', function(){
    return view('login');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/myprofile', function(){
    return view('myprofile');
});

Route::get('/editprofile', function(){
    return view('editprofile');
});

Route::get('/servicesmotors', function() {
    return view('servicesmotors');
});


Route::get('/reservation', function() {
    return view('reservation');
});

Route::get('/dashboard', function() {
    return view();
});
