<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\SellController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('sell', [SellController::class,'sell'])->name('sell')->middleware(['auth']);

Route::get('donate', [DonateController::class,'donate'])->name('donate')->middleware(['auth']);


Route::get('/recycle', function () {
    return view('recycle');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
