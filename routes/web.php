<?php

use App\Http\Controllers\AutenticacionController;
use App\Http\Controllers\Auth\AuthController;
USE App\Http\Controllers\UsuariosController;
USE App\Http\Controllers\DashBoardController;
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




    Route::get('register/register', [AuthController::class, 'register'])->name('registro.index');
    Route::post('register', [AuthController::class, 'regitrar']);

    Route::get('/',[AutenticacionController::class,'login'])->name('authe');
    Route::post('login',[AutenticacionController::class,'loginPost']);
    Route::post('login/loginPost',[AutenticacionController::class,'loginPost'])->name('authe.login');

     Route::post('logout',[AutenticacionController::class,'logout'])->name('auth.logout');




Route::middleware('auth')->group(function () {
   Route::get('home', [DashBoardController::class ,'index'])->name('home');
   Route::get('usuarios', [UsuariosController::class,'index'])->name('usuarios.index');
});