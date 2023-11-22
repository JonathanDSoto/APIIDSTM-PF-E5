<?php

use App\Models\reservation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ServicesController;

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

Route::get('/motors', function() {
    return view('motors');
});

Route::get('/details', function() {
    return view('details');
});

Route::get('/reservation', function() {
    return view('reservation');
});

Route::get('/dashboard', function() {
    return view();
});

Route::get('/clients', [ClientsController::Class])->name('client.index');
Route::get('/client/create', [ClientsController::Class])->name('client.create');
Route::get('/client/{id}/edit', [ClientsController::Class])->name('client.edit');
Route::put('/client/{client}', [ClientsController::Class])->name('client.update');
Route::get('/client/{id}/delete', [ClientsController::Class])->name('client.destroy');

Route::get('/services', [ServicesController::class])->name('services.index');
Route::get('/service/create', [ServicesController::class])->name('services.create');
Route::get('/service/{id}/edit', [ServicesController::class])->name('services.edit');
Route::put('/service/{client}', [ServicesController::class])->name('services.update');
Route::get('/service/{id}/delete', [ServicesController::class])->name('services.destroy');