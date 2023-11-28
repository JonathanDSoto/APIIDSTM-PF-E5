<?php

use App\Models\reservation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ReservationController;

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
    return view('auth.login');
})->middleware('guest');

Route::get('/login', function(){
    return redirect('/');
})->name('login');

Route::get('logout/view', function () {
    return view('logout');
});

Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::middleware(['auth'])->group(function (){
    Route::get('/home', function(){
        return view('home');
    })->name('home');

    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    // Crud de los clientes
    Route::group(['prefix' => 'clients'], function () {
        Route::get('/', [ClientController::class, 'index'])->name('client.index');
        Route::get('/create', [ClientController::class, 'create'])->name('client.create');
    });

    // Crud de los servicios
    Route::group(['prefix' => 'services'], function () {
        Route::get('/', [ServicesController::class, 'index'])->name('service.index');
        Route::get('/create', [ServicesController::class, 'create'])->name('service.create');
    });

    // Crud de las reservaciones
    Route::group(['prefix' => 'reservations'], function () {
        Route::get('/', [ReservationController::class, 'index'])->name('reservation.index');
        Route::get('/create', [ReservationController::class, 'create'])->name('reservation.create');
    });

});

/* Route::get('/home', function(){
    return view('home');
})->name('home'); */

/* Route::get('/services/{slug}', function () {
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



Route::get('/clients', function() {
    return view('clients');
})->name('clients');

Route::get('/client', function(){
    return view('clientDetails');
})->name('client.show'); */

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
