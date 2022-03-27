<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/piesaz', [SiteController::class, 'piezas'])->middleware(['auth'])->name('piezas');
Route::get('/personal', [SiteController::class, 'personal'])->middleware(['auth'])->name('personal');
Route::get('/lineas', [SiteController::class, 'lineas'])->middleware(['auth'])->name('lineas');
Route::get('/calendar', [SiteController::class, 'calendar'])->middleware(['auth'])->name('calendar');

Route::post('/logout', [SiteController::class, 'logout'])->name('logout');

require __DIR__.'/auth.php';