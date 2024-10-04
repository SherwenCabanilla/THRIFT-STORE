<?php

use App\Http\Controllers\ButangController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SetDateController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



// Set up routes for MemberController
Route::prefix('members')->group(function () {
    Route::get('/', [MemberController::class, 'index'])->name('members.index');
    Route::post('/', [MemberController::class, 'store'])->name('members.store');
    Route::put('/', [MemberController::class, 'update'])->name('members.update');
    Route::delete('/{id}', [MemberController::class, 'destroy'])->name('members.destroy');
});


// Set up routes for SetDateController
Route::prefix('setDate')->group(function () {
    Route::get('/', [SetDateController::class, 'index'])->name('setDate.index');
    Route::post('/', [SetDateController::class, 'setButang'])->name('setDate.setButang');
    Route::delete('/{id}', [SetDateController::class, 'delete'])->name('setDate.delete');
});

// Set up routes for HomeController
Route::prefix('home')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});


// Set up routes for ButangController
Route::prefix('butang')->group(function () {
    Route::get('/', [ButangController::class, 'index'])->name('butang.index');
});
