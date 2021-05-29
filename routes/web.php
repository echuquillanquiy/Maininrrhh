<?php

use App\Http\Controllers\CollaboratorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;

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

Route::get('/', HomeController::class)->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('trabajos', [WorkController::class, 'index'])->name('works.index');

Route::get('trabajos/{work}', [WorkController::class, 'show'])->name('works.show');

Route::post('works/{work}/applied', [WorkController::class, 'applied'])->middleware('auth')->name('works.applied');

