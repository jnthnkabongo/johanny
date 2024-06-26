<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\loginController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('Detail-Produit', [IndexController::class, 'detailProduit'])->name('detail-produit');
Route::get('Se-connecter', [loginController::class, 'index'])->name('connexion');
Route::get('exemple', [IndexController::class, 'exemple'])->name('connexion');
