<?php

use App\Http\Controllers\CnpController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('home', [CnpController::class, 'index'])->name('home');
Route::post('post-cnp', [CnpController::class, 'store'])->name('post-cnp');
