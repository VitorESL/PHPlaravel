<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\AboutController;
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

Route::get('/', [HomeController::class, "index"]);
Route::get('/about', [AboutController::class, "abouts"]);
Route::get('/contact', [ContactController::class, "contact"]);
Route::post('/contact', [ContactController::class, "submit"]);
Route::get('/tour', [TourController::class, "tours"]);
Route::get('/newsletter', [ContactController::class, "newsletter"]);
