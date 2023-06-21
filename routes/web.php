<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServicesController;
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
//     // return view('welcome');
//     return view('website.home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('ajaxRequest', [HomeController::class, 'ajaxRequest'])->name('ajaxRequest');

Route::get('projects', [ProjectsController::class, 'index'])->name('projects');

Route::get('specificProject/{id}', [HomeController::class, 'specific_project_details'])->name('specificProject');

Route::get('services', [ServicesController::class, 'index'])->name('services');

Route::get('specificService/{type}/{id}', [HomeController::class, 'specific_service_details'])->name('specificService');
Route::get('specificDetails/{type}/{id}', [HomeController::class, 'specific_details'])->name('specificDetails');

