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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\addresscontroller;
use App\Http\Controllers\recycleadress;
use App\Http\Controllers\dashb;
use App\Http\Controllers\AdmController;
use App\Http\Controllers\adminrecycleController;
use App\Http\Controllers\adminsellController;
use App\Http\Controllers\donatedController;
use App\Http\Controllers\admindonateController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('admin', [AdmController::class,'work'])->name('admin');

Route::get('admin/adminrecycle', [adminrecycleController::class,'index'])->name('adminrecycle');

Route::get('admin/admisell', [adminsellController::class,'index'])->name('adminsell');

Route::get('admin/admidonate', [admindonateController::class,'index'])->name('admindonate');

Route::post('donate', [DonateController::class,'donatecreate'])->name('donate.store')->middleware(['auth']);

// Route::get('donate/donated', [DonateController::class,'donate'])->name('donate')->middleware(['auth']);

Route::get('donate', [DonateController::class,'donate'])->name('donate')->middleware(['auth']);

Route::get('dashboard', [dashb::class,'index'])->name('dashboard')->middleware(['auth']);

Route::get('recycle', [HomeController::class,'recycled'])->middleware(['auth'])->name('recycle');

Route::post('recycle/recyclefetch', [HomeController::class,'recyclefetch'])->middleware(['auth'])->name('recycle.fetch');

Route::post('recycle', [recycled::class,'create'])->name('recycle.store')->middleware(['auth']);

Route::get('recycle/recycled', [MainController::class,'recycleindex'])->middleware(['auth'])->name('recycled');

Route::post('recycle/recycled/recycledfetch', [MainController::class,'recycledfetch'])->name('recycled.fetch');

Route::post('recycle/recycled', [recycleadress::class,'address'])->name('recycled.store');


Route::get('sell/sold', [addresscontroller::class,'index'])->middleware(['auth']);

Route::post('sell/sold/fetch', [addresscontroller::class,'fetch'])->name('dynamic.fetch')->middleware(['auth']);
  

Route::post('sell/sold', [addresscontroller::class,'addres'])->name('address.store');


Route::get('/sell', [DynamicDependent::class,'index'])->name('sell')->middleware(['auth']);

Route::post('sell/fetch', [DynamicDependent::class,'fetch'])->middleware(['auth'])->name('dynamicdependent.fetch');

Route::post('sell', [sellsubmit::class,'create'])->name('sell.store');


Route::get('donate/donated', [donatedController::class,'index'])->middleware(['auth']);
Route::post('donate/donated/fetch', [donatedController::class,'fetch'])->name('dynamic.fetch')->middleware(['auth']);
  

Route::post('donate/donated', [donatedController::class,'addres'])->name('donated.store');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
