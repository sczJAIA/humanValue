<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('personas', 'App\Http\Controllers\PersonaController')->name('index', 'personaurl');
Route::resource('telefonos', 'App\Http\Controllers\TelefonoController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return redirect()->route('personaurl');
});
