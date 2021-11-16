<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CalendarController;

Route::get('',[AdminController::class ,'index'])->name('admin.home');
Route::resource('calendar', CalendarController::class)->name('GET','admin.calendar');
