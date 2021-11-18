<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\AsuntosController;
Route::get('',[AdminController::class ,'index'])->name('admin.home');
Route::resource('calendar', CalendarController::class)->name('GET','admin.calendar');
Route::resource('asuntos', AsuntosController::class)->name('GET','admin.asuntos');
