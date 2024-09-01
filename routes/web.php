<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\LoanofficerController;
use App\Http\Controllers\EmiController;

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
Route::get('/admin/manager_edit/{email}', [ManagerController::class, 'manager_edit'])->name('manager_edit');
Route::delete('/admin/manager_delete/{email}', [ManagerController::class, 'manager_delete'])->name('manager_delete');

Route::get('admin/loanofficer_form', [LoanofficerController::class, 'loanofficer_form']);
Route::post('admin/loanofficer_save', [LoanofficerController::class, 'loanofficer_save'])->name('loanofficer_save');
Route::get('admin/loanofficer_list', [LoanofficerController::class, 'loanofficer_list'])->name('loanofficer_list');
Route::get('admin/loanofficer_view', [LoanofficerController::class, 'loanofficer_view'])->name('loanofficer_view');
Route::get('/admin/loanofficer_edit/{email}', [LoanofficerController::class, 'loanofficer_edit'])->name('loanofficer_edit');
Route::post('/admin/loanofficer_update/{email}', [LoanofficerController::class, 'loanofficer_update'])->name('loanofficer_update');
Route::delete('/admin/loanofficer_delete/{email}', [LoanofficerController::class, 'loanofficer_delete'])->name('loanofficer_delete');
Route::get('loanofficer/loan', [LoanofficerController::class, 'loan_calculate']);
Route::get('loanofficer/emi_calculator', [LoanofficerController::class, 'emi_calculator']);

Route::get('customer_form', [CustomerController::class, 'customer_form']);
Route::post('customer_form', [CustomerController::class, 'store']);
Route::get('customer_list', [CustomerController::class, 'customer_list'])->name('customer_list');
Route::get('customer/{id}/view', [CustomerController::class, 'view'])->name('customer.view');
Route::get('customer/{id}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('customer/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::get('loanofficer/loanofficer_dashboard', [CustomerController::class, 'loanofficer_dashboard']);


Route::get('/emi', [EmiController::class, 'index'])->name('emi.index');
Route::post('calculateEmi', [EmiController::class, 'calculateEmi'])->name('calculateEmi');
Route::post('/emi/save', [EmiController::class, 'saveEmi'])->name('emi.save');
Route::get('/emi/repayment-schedule', [EmiController::class, 'showRepaymentSchedule'])->name('emi.showSchedule');

Route::post('/emi-save', [EmiController::class, 'store'])->name('emi.save');
Route::match(['get', 'post'], '/emi-calculator', [EmiController::class, 'index'])->name('emi.calculator');

Route::post('/emi-calculator', [EmiController::class, 'calculate'])->name('emi.calculate');


Route::get('/emi', [EmiController::class, 'emi'])->name('emi');

Route::post('/calculate-emi', [EmiController::class, 'calculateEmi']);
Route::post('/save-emi', [EmiController::class, 'saveEmi']);
Route::post('/show-schedule', [EmiController::class, 'showSchedule']);
