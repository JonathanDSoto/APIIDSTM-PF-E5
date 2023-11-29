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
        return view('home');
    })->name('home');

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
