<?php

use App\Http\Controllers\NavigationController;
use App\Http\Controllers\Sendmailcontroller;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
   return view('site.home');
}); */

Route::get('/', [NavigationController::class, 'home'])->name('home');
Route::get('/servicos', [NavigationController::class, 'servicos'])->name('servicos');
Route::get('/galeria', [NavigationController::class, 'galeria'])->name('galeria');
Route::get('/contato', [NavigationController::class, 'contato'])->name('contato');

Route::post('/', [Sendmailcontroller::class, 'lead'])->name(name: 'lead');
Route::post('/contato', [Sendmailcontroller::class, 'contato'])->name(name: 'novocontato');
