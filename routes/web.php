<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\ClientController;
use App\Http\Controllers\Web\ServicesController;
use App\Http\Controllers\Web\ReservationController;
use App\Http\Controllers\Web\CategoryController;

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
    Route::get('/home', [CategoryController::class, 'home'])->name('home');

    // Crud de los clientes
    Route::group(['prefix' => 'clients'], function () {
        Route::get('/', [ClientController::class, 'index'])->name('client.index');
        Route::get('/create', [ClientController::class, 'create'])->name('client.create');
        Route::post('/store', [ClientController::class, 'store'])->name('client.store');
        Route::get('/{client}', [ClientController::class, 'show'])->name('client.show');
        Route::get('/{client}/edit', [ClientController::class, 'edit'])->name('client.edit');
        Route::put('/{client}/update', [ClientController::class, 'update'])->name('client.update');
        Route::delete('/{client}/destroy', [ClientController::class, 'destroy'])->name('client.destroy');
    });

    // Crud de las categorias
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('category.show');
        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/{category}/update', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('/{category}/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');
    });

    // Crud de los servicios
    Route::group(['prefix' => 'services'], function () {
        Route::get('/', [ServicesController::class, 'index'])->name('service.index');
        Route::get('/create', [ServicesController::class, 'create'])->name('service.create');
        Route::post('/store', [ServicesController::class, 'store'])->name('service.store');
        Route::get('/{service}', [ServicesController::class, 'show'])->name('service.show');
        Route::get('/{service}/edit', [ServicesController::class, 'edit'])->name('service.edit');
        Route::put('/{service}/update', [ServicesController::class, 'update'])->name('service.update');
        Route::delete('/{service}/destroy', [ServicesController::class, 'destroy'])->name('service.destroy');
    });

    // Crud de las reservaciones
    Route::group(['prefix' => 'reservations'], function () {
        Route::get('/', [ReservationController::class, 'index'])->name('reservation.index');
        Route::get('/create', [ReservationController::class, 'create'])->name('reservation.create');
        Route::post('/store', [ReservationController::class, 'store'])->name('reservation.store');
        Route::get('/{reservation}', [ReservationController::class, 'show'])->name('reservation.show');
        Route::get('/{reservation}/edit', [ReservationController::class, 'edit'])->name('reservation.edit');
        Route::put('/{reservation}/update', [ReservationController::class, 'update'])->name('reservation.update');
        Route::delete('/{reservation}/destroy', [ReservationController::class, 'destroy'])->name('reservation.destroy');
    });
});
