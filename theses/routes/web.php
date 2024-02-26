<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/theses', [AdminController::class, 'index']);



// Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/theses', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/theses/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/theses', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/theses/{thesis}', [AdminController::class, 'show'])->name('admin.show');
    Route::get('/theses/{thesis}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/theses/{thesis}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/theses/{thesis}', [AdminController::class, 'destroy'])->name('admin.destroy');
// });



// Route::prefix('admin')->middleware('auth')->group(function () {
//     Route::resource('theses', AdminController::class);
// });

