<?php

use App\Http\Controllers\AutenticacionController;
use App\Http\Controllers\Auth\AuthController;
USE App\Http\Controllers\UsuariosController;
USE App\Http\Controllers\DashBoardController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ResetPasswordController;

use App\Http\Controllers\ForgotPasswordController;

use App\Http\Controllers\ConfirmPasswordController;
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

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register.index');
    Route::post('register',  'regitrar')->name('registro.add');
    Route::get('recordar',  'recordar')->name('recordar.index');
    Route::post('regupdate',  'regupdate')->name('recordar.recupdate');
});

 Route::controller(ForgotPasswordController::class)->group(function () {
        Route::get('forget-password', 'getEmail')->name('forget-password');
        Route::post('forget-password', 'postEmail')->name('forget-password');
    });

 Route::controller(ResetPasswordController::class)->group(function () {
        Route::get('reset-password/{token}/{email}', 'showResetForm')->name('password.show');
        Route::post('password/update', 'updatePassword')->name('password.update');
    });

 Route::controller(ConfirmPasswordController::class)->group(function () {
        Route::get('confirm/password', 'confirmPassword')->name('confirm/password');
    });


Route::controller(AutenticacionController::class)->group(function () {
    Route::get('/','login')->name('authe');
     Route::post('login','loginPost');
     Route::post('login/loginPost','loginPost')->name('authe.login');
     Route::post('logout','logout')->name('auth.logout');
});

Route::middleware('auth')->group(function () {

    Route::get('home', [DashBoardController::class ,'index'])->name('home');

    Route::middleware('superadmin')->group(function () {

         Route::controller(UsuariosController::class)->group(function () {
           Route::get('usuarios', 'index')->name('usuarios.index');
           Route::get('usuarios/create', 'create')->name('usuarios.create');
           Route::get('usuarios/edit/{id}', 'edit')->name('usuarios.edit');
           Route::get('usuarios/{id}', 'show')->name('usuarios.show');
         });

        Route::controller(RolesController::class)->group(function () {
           Route::get('roles', 'index')->name('roles.index');
           Route::get('roles/create', 'create')->name('roles.create');
           Route::get('roles/edit/{id}', 'edit')->name('roles.edit');
           Route::get('roles/{id}', 'show')->name('roles.show');
         });

         Route::controller(ProductosController::class)->group(function () {
           Route::get('producto', 'index')->name('producto.index');
           Route::get('producto/create', 'create')->name('producto.create');
           Route::get('producto/edit/{id}', 'edit')->name('producto.edit');
           Route::get('producto/{id}', 'show')->name('producto.show');
         });

             Route::controller(ClientesController::class)->group(function () {
           Route::get('cliente', 'index')->name('cliente.index');
           Route::get('cliente/create', 'create')->name('cliente.create');
           Route::get('cliente/edit/{id}', 'edit')->name('cliente.edit');
           Route::get('cliente/{id}', 'show')->name('cliente.show');
         });

    });


   Route::middleware('administrador')->group(function () {

         Route::controller(ProductosController::class)->group(function () {
           Route::get('productos', 'index')->name('productos.index');
           Route::get('productos/create', 'create')->name('productos.create');
           Route::get('productos/edit/{id}', 'edit')->name('productos.edit');
           Route::get('productos/{id}', 'show')->name('productos.show');
         });

         Route::controller(ClientesController::class)->group(function () {
           Route::get('clientes', 'index')->name('clientes.index');
           Route::get('clientes/create', 'create')->name('clientes.create');
           Route::get('clientes/edit/{id}', 'edit')->name('clientes.edit');
           Route::get('clientes/{id}', 'show')->name('clientes.show');
         });

    });

});
