<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/admin_dashboard', [App\Http\Controllers\HomeController::class, 'admin_dashboard']);
Route::get('manager/manager_dashboard', [App\Http\Controllers\HomeController::class, 'manager_dashboard']);
Route::get('loanofficer/loanofficer_dashboard', [App\Http\Controllers\HomeController::class, 'loanofficer_dashboard']);

Route::get('admin/manager_form', [ManagerController::class, 'manager_form']);
Route::get('admin/manager_list', [ManagerController::class, 'manager_list'])->name('manager_list');
Route::get('admin/manager_create', [ManagerController::class, 'manager_create']);
Route::post('admin/manager_save', [ManagerController::class, 'manager_save'])->name('manager_save');
Route::get('admin/manager_view', [ManagerController::class, 'manager_view'])->name('manager_view');
Route::post('/admin/manager_update/{user}', [ManagerController::class, 'manager_update'])->name('manager_update');
Route::delete('/admin/manager_delete/{email}', [ManagerController::class, 'destroy'])->name('manager_delete');
Route::get('/admin/manager_edit/{email}', [ManagerController::class, 'edit'])->name('manager_edit');

Route::get('admin/loanofficer_form', [ManagerController::class, 'loanofficer_form']);
