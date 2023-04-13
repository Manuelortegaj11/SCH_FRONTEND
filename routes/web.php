<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DoctorController;


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

// Route::get('/admin', function () {
//     return view('home.index');
// });
Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/panel-administrativo',[HomeController::class, 'index'])->name('home');
Route::resource('/pacientes',PacienteController::class);
Route::resource('/doctores',DoctorController::class);
