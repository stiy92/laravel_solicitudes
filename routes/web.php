<?php

use Illuminate\Support\Facades\Route;
// agregando los controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RollController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SolicitudesController;


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

Route::group([
    'middleware' => ['auth']], function(){
        Route::resource('roles', RollController::class);
        Route::resource('usuarios', UsuarioController::class);
        Route::resource('solicitudes', SolicitudesController::class);
    });


Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('home');
})->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

