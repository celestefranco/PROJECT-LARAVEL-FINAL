<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('/dashboard/clients', ClientController::class);

Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');

Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');

Route::get('/clients/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');

Route::put('/clients/{id}/deactivate', [ClientController::class, 'deactivate'])->name('clients.deactivate');

Route::put('/clients/{id}/activate', [ClientController::class, 'activate'])->name('clients.activate');

Route::resource('/dashboard/services', ServicesController::class);

Route::get('/services/create', [ServicesController::class, 'create'])->name('services.create');

Route::get('/services/{service}', [ServicesController::class, 'show'])->name('services.show');

Route::get('/services/{service}/edit', [ServicesController::class, 'edit'])->name('services.edit');

Route::resource('/dashboard/roomtypes', RoomTypeController::class);

Route::get('/roomtypes/create', [RoomTypeController::class, 'create'])->name('roomtypes.create');

Route::get('/roomtypes/{roomType}', [RoomTypeController::class, 'show'])->name('roomtypes.show');

Route::get('/roomtypes/{roomType}/edit', [RoomTypeController::class, 'edit'])->name('roomtypes.edit');

Route::resource('/dashboard/rooms', RoomController::class);

Route::get('/rooms/create',[RoomController::class,'create'])->name('rooms.create');

Route::get('/rooms/{room}/edit', [RoomController::class, 'edit'])->name('rooms.edit');

Route::resource('/dashboard/reserves', ReservationController::class);

Route::get('/reserves/create', [ReservationController::class, 'create'])->name('reserves.create');


