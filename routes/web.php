<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\AdminController;
use App\http\controllers\FrontendController;

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

// Route untuk halaman Frontend
Route::get('/', [FrontendController::class, 'showData']);
Route::get('/frontend/{id_wisata}', [FrontendController::class, 'showDetail']);

// Route untuk proses CRUD
Route::resource('admin', AdminController::class);
