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
})->name('home');

Route::get('/services/{slug}', function () {
    return view('services', ['slug' => 'Motor']);
})->name('services');

Route::get('/services/{slug}/{service}', function () {
    return view('service');
})->name('service-details');

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

Route::get('/client', function(){
    return view('clientDetails');
})->name('client.show');

/*
Route::get('/clients', [ClientsController::class])->name('client.index');
Route::get('/client/create', [ClientsController::class])->name('client.create');
/* Route::post('/client', [ClientController::class])->name('client.store');
Route::get('/client', function(){
    return view('clientDetails');
})->name('client.show');
Route::get('/client/{id}/edit', [ClientsController::class])->name('client.edit');
Route::put('/client/{client}', [ClientsController::class])->name('client.update');
Route::get('/client/{id}/delete', [ClientsController::class])->name('client.destroy');

Route::get('/services', [ServicesController::class])->name('service.index');
Route::get('/service/create', [ServicesController::class])->name('service.create');
/* Route::post('/client', [ClientController::class])->name('client.store');
Route::get('/service/{id}/edit', [ServicesController::class])->name('service.edit');
Route::put('/service/{client}', [ServicesController::class])->name('service.update');
Route::get('/service/{id}/delete', [ServicesController::class])->name('service.destroy');
 */
