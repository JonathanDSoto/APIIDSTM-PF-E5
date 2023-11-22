<?php

use App\Models\reservation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;

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
})->name('home');

Route::get('/myprofile', function(){
    return view('myprofile');
});

Route::get('/editprofile', function(){
    return view('editprofile');
});

Route::get('/motors', function() {
    return view('motors');
})->name('motors');

Route::get('/details', function() {
    return view('details');
});

Route::get('/reservation', function() {
    return view('reservation');
});

Route::get('/dashboard', function() {
    return view('dashboard');
})->name('dashboard');

Route::get('/clients', function() {
    return view('clients');
})->name('clients');
