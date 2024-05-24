<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backendcontroller\DashboardController;
use App\Http\Controllers\Backendcontroller\CategoryController;




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
//     return view('components.dashboard.index');
// });
Route::get('/', [DashboardController::class, 'index']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/create', [CategoryController::class, 'create']);
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit']);
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/categories/view/{id}', [CategoryController::class, 'view']);
Route::delete('/categories/destroy/{id}', [CategoryController::class, 'destroy']);
