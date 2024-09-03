<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\LoanofficerController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\EmiCalculatorController;
use App\Http\Controllers\ProspectController;

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Routes
Route::get('admin/admin_dashboard', [App\Http\Controllers\HomeController::class, 'admin_dashboard']);
Route::get('admin/manager_form', [ManagerController::class, 'manager_form']);
Route::get('admin/manager_list', [ManagerController::class, 'manager_list'])->name('manager_list');
Route::get('admin/manager_create', [ManagerController::class, 'manager_create']);
Route::post('admin/manager_save', [ManagerController::class, 'manager_save'])->name('manager_save');
Route::get('admin/manager_view', [ManagerController::class, 'manager_view'])->name('manager_view');
Route::post('/admin/manager_update/{user}', [ManagerController::class, 'manager_update'])->name('manager_update');
Route::get('/admin/manager_edit/{email}', [ManagerController::class, 'manager_edit'])->name('manager_edit');
Route::delete('/admin/manager_delete/{email}', [ManagerController::class, 'manager_delete'])->name('manager_delete');

// Loan Officer Routes
Route::get('loanofficer/loan', [LoanofficerController::class, 'loan_calculate']);
Route::get('loanofficer/emi_calculator', [LoanofficerController::class, 'emi_calculator']);
Route::get('loanofficer/apply_loan', [LoanofficerController::class, 'apply_loan']);
Route::get('loanofficer/apply_loan_ii', [LoanofficerController::class, 'apply_loan_ii']);
Route::get('loanofficer/apply_loan_v', [LoanofficerController::class, 'apply_loan_v']);
Route::get('loanofficer/loanofficer_dashboard', [LoanofficerController::class, 'loanofficer_dashboard']);
Route::post('loanofficer/apply_loan_ii', [LoanofficerController::class, 'applyLoanII'])->name('loanofficer.apply_loan_ii');
Route::post('/apply-loan-ii', [LoanofficerController::class, 'applyLoanII'])->name('loanofficer.apply_loan_ii');


// Customer Routes
Route::get('customer_form', [CustomerController::class, 'customer_form']);
Route::post('customer_form', [CustomerController::class, 'store']);
Route::get('customer_list', [CustomerController::class, 'customer_list'])->name('customer_list');
Route::get('customer/{id}/view', [CustomerController::class, 'view'])->name('customer.view');
Route::get('customer/{id}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('customer/{id}', [CustomerController::class, 'update'])->name('customer.update');

// EMI Calculator Routes
Route::get('/emi-calculator', [EmiCalculatorController::class, 'index'])->name('emi.index');
Route::post('/calculate-emi', [EmiCalculatorController::class, 'calculateEmi'])->name('emi.calculate');

// Loan Routes
Route::post('/loan/step1', [LoanController::class, 'store'])->name('loan.step1');
Route::get('/loan/success/{id}', [LoanController::class, 'show'])->name('loan.show');
