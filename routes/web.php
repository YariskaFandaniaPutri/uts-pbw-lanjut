<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ServiceController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, "home"]);
Route::get('/about', [AboutController::class, "about"]);
Route::get('/resume', [ResumeController::class, "resume"]);
Route::get('/service', [ServiceController::class, "service"]);
Route::get('/portofolio', [PortofolioController::class, "portofolio"]);
Route::get('/contact', [ContactController::class, "contact"]);