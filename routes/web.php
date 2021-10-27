<?php

use App\Http\Controllers\EscortController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Mail\ContactoMailable;

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

Route::get('/', HomeController::class);

Route::resource('escorts', EscortController::class);

Route::view('nosotros','nosotros')->name('nosotros');

Route::get('contacto', function(){
    $correo = new ContactoMailable;

    Mail::to('lera@3de.es')->send($correo);

    return "mensaje enviado";
});
