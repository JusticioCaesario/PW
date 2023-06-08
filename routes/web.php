<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FormController;
use App\Models\form;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\AjuanController;

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

//View Layout
Route::get('/layout', [LayoutController::class, 'index']);
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/test', [UserController::class, 'test']);

// Calendar routes

Route::get('calendar/index', [CalendarController::class, 'index'])->name('calendar.index');
Route::post('calendar', [CalendarController::class, 'store'])->name('calendar.store');
Route::patch('calendar/update/{id}', [CalendarController::class, 'update'])->name('calendar.update');
Route::delete('calendar/destroy/{id}', [CalendarController::class, 'destroy'])->name('calendar.destroy');
//INI ROUTE TAMPIL KALENDER BBUAT HOME NNTI
Route::get('calendar/show', [CalendarController::class, 'show'])->name('calendar.show');

Route::get('books', [BookController::class, 'index'])->name('books.index');
Route::post('books', [BookController::class, 'store'])->name('books.store');

Route::get('/export-db', function() {
    return "Exporting";
});

//Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');


// Register
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

//formajuan

Route::get('/create', [FormController::class, 'index'])->name('create');
Route::post('/create', [FormController::class, 'create'])->name('create');

//Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Ajuan
Route::get('/ajuan', [AjuanController::class, 'index'])->name('ajuan');
Route::post('/ajuan', [AjuanController::class, 'ajuan'])->name('ajuan');