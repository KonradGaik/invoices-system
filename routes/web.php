<?php

use App\Http\Controllers\fakturomatController;
use App\Http\Controllers\KlienciController;
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

Route::get('/', [fakturomatController::class,'welcome'])->name('stronaglowna');
Route::get('/welcome', [fakturomatController::class,'stronaglowna']);
#listowanie wszystkich faktur
Route::get('/faktury',[fakturomatController::class,'faktury'])->name('faktury'); 
#tworzenie faktur
Route::get('faktura/utworz', [fakturomatController::class,'utworz'])->name('utworz');
#zapisywanie faktur
Route::get('/faktura/zapisz', [fakturomatController::class,'zapisz'])->name('faktura.zapisz');
Route::post('/faktura/zapisz', [fakturomatController::class,'zapisz'])->name('faktura.zapisz');
#edycja faktury
Route::get('faktura/edytuj/{id}',[fakturomatController::class,'edytuj'])->name('faktura.edycja')->middleware('auth');
Route::get('faktura/aktualizuj/{id}',[fakturomatController::class,'aktualizuj'])->name('faktura.aktualizacja')->middleware('auth');
Route::put('faktura/edytuj/{id}',[fakturomatController::class,'edytuj'])->name('faktura.edycja')->middleware('auth');
Route::put('faktura/aktualizuj/{id}',[fakturomatController::class,'aktualizuj'])->name('faktura.aktualizacja')->middleware('auth');
#usun fakture
Route::get('/faktury/usun/{id}',[fakturomatController::class,'usun'])->name('faktura.usun')->middleware('auth');
Route::delete('/faktury/usun/{id}',[fakturomatController::class,'usun'])->name('faktura.usun')->middleware('auth');
#klienci
Route::resource('klienci',KlienciController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/search',[fakturomatController::class,'search'])->name('search');