<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// View Welcome
Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/test', [UserController::class, 'test']);

// Calendar routes
Route::get('calendar/index', [CalendarController::class, 'index'])->name('calendar.index');
Route::post('calendar', [CalendarController::class, 'store'])->name('calendar.store');
Route::patch('calendar/update/{id}', [CalendarController::class, 'update'])->name('calendar.update');
Route::delete('calendar/destroy/{id}', [CalendarController::class, 'destroy'])->name('calendar.destroy');

Route::get('books', [BookController::class, 'index'])->name('books.index');
Route::post('books', [BookController::class, 'store'])->name('books.store');

Route::get('/export-db', function() {
    return "Exporting";
});
