<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('admin/admin_dashboard', [App\Http\Controllers\HomeController::class, 'admin_dashboard']);
Route::get('manager/manager_dashboard', [App\Http\Controllers\HomeController::class, 'manager_dashboard']);
Route::get('loanofficer/loanofficer_dashboard', [App\Http\Controllers\HomeController::class, 'loanofficer_dashboard']);


Route::get('admin/manager_form', [App\Http\Controllers\ManagerController::class, 'manager_form']);
Route::get('admin/loanofficer_form', [App\Http\Controllers\ManagerController::class, 'loanofficer_form']);


