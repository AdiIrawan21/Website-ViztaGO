<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\AdminController;
use App\http\controllers\FrontendController;
use App\http\controllers\SessionController;

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
Route::resource('admin', AdminController::class)->middleware('isLogin');

//Route untuk Session
Route::get('/sesi', [SessionController::class,'index'])->middleware('isTamu');
Route::post('/sesi/login', [SessionController::class,'login'])->middleware('isTamu');
Route::get('/sesi/logout', [SessionController::class,'logout']);

//Route untuk Session Register
Route::get('/sesi/register', [SessionController::class,'register'])->middleware('isTamu');
Route::post('/sesi/create', [SessionController::class,'create'])->middleware('isTamu');
