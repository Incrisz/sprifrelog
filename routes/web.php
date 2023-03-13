<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ShipmentController;


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


Route::get('/track', [App\Http\Controllers\ShipmentController::class, 'trackpage']);
Route::post('/track/shipments', [App\Http\Controllers\ShipmentController::class, 'trackedShipmentPage'])->name('trackedshipment');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/shipments/api', [App\Http\Controllers\ShipmentController::class, 'trackShipment']);
Route::resource('shipments', 'App\Http\Controllers\ShipmentController')->middleware("auth");