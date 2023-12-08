<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\ReservationController;
use App\Http\Controllers\Api\ServicesController;
use App\Http\Controllers\API\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (!Auth::attempt($credentials)) {
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    $token = $request->user()->createToken('token-name')->plainTextToken;

    return response()->json(['token' => $token]);
});

Route::group(['middleware' => ['auth:sanctum']], function () {

    // Crud de los clientes

}); */


Route::group(['prefix' => 'clients'], function () {
    Route::get('/', [ClientController::class, 'index'])->name('client.index');
    Route::get('/create', [ClientController::class, 'create'])->name('client.create');
    Route::post('/store', [ClientController::class, 'store'])->name('client.store');
    Route::get('/{client}', [ClientController::class, 'show'])->name('client.show');
    Route::get('/{client}/edit', [ClientController::class, 'edit'])->name('client.edit');
    Route::put('/{client}/update', [ClientController::class, 'update'])->name('client.update');
    Route::delete('/{client}/destroy', [ClientController::class, 'destroy'])->name('client.destroy');
    Route::post('/login', [ClientController::class, 'login'])->name('client.login');
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
    Route::get('/download/{reservation}', [ReservationController::class, 'download'])->name('reservation.pdf');
});
