<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/project/aida', [\App\Http\Controllers\HomeController::class, 'projectAida']);
Route::get('/project/cent', [\App\Http\Controllers\HomeController::class, 'projectCent']);
Route::get('/project/kn', [\App\Http\Controllers\HomeController::class, 'projectKn']);
Route::get('/tester', [\App\Http\Controllers\HomeController::class, 'tester'])->name('tester');
Route::get('/project/botan', [\App\Http\Controllers\HomeController::class, 'projectBotan'])->name('projectBotan');

Route::get('/owner/boi', [\App\Http\Controllers\HomeController::class, 'ownerBoi']);
Route::get('/documents', [\App\Http\Controllers\HomeController::class, 'ownerBoi']);

Route::get('resources/static', [\App\Http\Controllers\HomeController::class, 'explain']);
Route::get('start', [\App\Http\Controllers\HomeController::class, 'start']);
Route::get('april', [\App\Http\Controllers\HomeController::class, 'april']);
Route::get('gains', [\App\Http\Controllers\HomeController::class, 'gains']);
Route::get('move', [\App\Http\Controllers\HomeController::class, 'move']);
Route::get('license', [\App\Http\Controllers\HomeController::class, 'license']);
Route::get('license-kaz', [\App\Http\Controllers\HomeController::class, 'license_kaz']);
Route::get('change', [\App\Http\Controllers\HomeController::class, 'change']);
