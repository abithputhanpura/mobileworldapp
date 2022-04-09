<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\sellcontrol;
use App\Http\Controllers\sellsubmit;
use App\Http\Controllers\MainController;
use App\Http\Controllers\recycled;
use App\Http\Livewire\brandmodeldropdown;
use App\Http\Controllers\sellsubmitted;
use App\Http\Controllers\DynamicDependent;

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

Route::get('sell', [sellcontrol::class,'sell'])->name('sell')->middleware(['auth']);


Route::post('sell', [sellsubmit::class,'create'])->name('sell.store');

Route::get('sell/sold', [sellsubmitted::class,'sold'])->name('sell.sold');

Route::get('donate', [DonateController::class,'donate'])->name('donate')->middleware(['auth']);

Route::get('recycle', [MainController::class,'screen'])->name('recycle')->middleware(['auth']);

Route::get('recycle/recycledone', [MainController::class,'screen'])->name('recycledone');

Route::post('recycle', [recycled::class,'create'])->name('recycle.store');


Route::get('recycle/recycledone', function () {
    return view('recycledone');
});

Route::get('/sell', [DynamicDependent::class,'index'])->name('sell')->middleware(['auth']);

Route::post('sell/fetch', [DynamicDependent::class,'fetch'])->middleware(['auth'])->name('dynamicdependent.fetch');


Route::get('brandmodeldropdown', Brandmodeldropdown::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
