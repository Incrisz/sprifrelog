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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [App\Http\Controllers\ShipmentController::class, 'trackpage']);
Route::post('/track/shipments', [App\Http\Controllers\ShipmentController::class, 'trackedShipmentPage'])->name('trackedshipment');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/shipments/api', [App\Http\Controllers\ShipmentController::class, 'trackShipment']);

Route::group(['prefix' => 'shipments/{shipment}/comments', 'middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\CommentController::class, 'index'])->name('comments.index')->middleware("auth");
    Route::get('/create', [App\Http\Controllers\CommentController::class, 'create'])->name('comments.create')->middleware("auth");
    Route::post('/', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store')->middleware("auth");
    Route::get('/{comment}/edit', [App\Http\Controllers\CommentController::class, 'edit'])->name('comments.edit')->middleware("auth");
    Route::put('/{comment}', [App\Http\Controllers\CommentController::class, 'update'])->name('comments.update')->middleware("auth");
    Route::delete('/{comment}', [App\Http\Controllers\CommentController::class, 'destroy'])->name('comments.destroy')->middleware("auth");
});


Route::resource('shipments', 'App\Http\Controllers\ShipmentController')->middleware("auth");
