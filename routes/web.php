<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\LoanofficerController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\EmiCalculatorController;
use App\Http\Controllers\ProspectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EMIController;



use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin  
Route::get('admin/admin_dashboard',                     [HomeController::class,                      'admin_dashboard']);
Route::get('admin/admin_dashboard',                     [HomeController::class,                      'admin_home']);
Route::get('admin/manager_form',                        [ManagerController::class,                   'manager_form']);
Route::get('admin/loanofficer_form',                    [LoanofficerController::class,               'loanofficer_form']);
Route::get('admin/manager_list',                        [ManagerController::class,                   'manager_list'])->name('manager_list');
Route::get('admin/loanofficer_list',                    [ManagerController::class,                   'loanofficer_list'])->name('loanofficer_list');
Route::get('admin/manager_create',                      [ManagerController::class,                   'manager_create']);
Route::post('admin/manager_save',                       [ManagerController::class,                   'manager_save'])->name('manager_save');
Route::get('admin/manager_view',                        [ManagerController::class,                   'manager_view'])->name('manager_view');
Route::post('/admin/manager_update/{user}',             [ManagerController::class,                   'manager_update'])->name('manager_update');
Route::get('/admin/manager_edit/{email}',               [ManagerController::class,                   'manager_edit'])->name('manager_edit');
Route::delete('/admin/manager_delete/{email}',          [ManagerController::class,                   'manager_delete'])->name('manager_delete');
Route::get('manager/loan_list',                         [ManagerController::class,                   'loan_list']);



// Loan Officer  
Route::get('loanofficer/loan',                          [LoanofficerController::class,               'loan_calculate']);
Route::get('loanofficer/emi_calculator',                [LoanofficerController::class,               'emi_calculator']);
Route::get('loanofficer/apply_loan',                    [LoanofficerController::class,               'apply_loan']);
Route::get('loanofficer/apply_loan_ii',                 [LoanofficerController::class,               'apply_loan_ii'])->name('apply_loan_ii');
Route::get('loanofficer/apply_loan_v',                  [LoanofficerController::class,               'apply_loan_v']);
Route::get('loanofficer/loanofficer_dashboard',         [LoanofficerController::class,               'loanofficer_dashboard']);
Route::post('loanofficer/apply_loan_ii',                [LoanofficerController::class,               'applyLoanII'])->name('loanofficer.apply_loan_ii');
Route::get('loanofficer/file_upload',                   [LoanofficerController::class,               'file_upload'])->name('loanofficer.file_upload');
Route::post('emi/store',                                [EMIController        ::class,                'store'])->name('emi.store');

Route::get('loanofficers',                              [LoanofficerController::class,               'loanofficer_list'])->name('admin.loanofficer_list');
Route::get('loanofficer/view/{email}',                  [LoanofficerController::class,               'loanofficer_view'])->name('admin.loanofficer_view');
Route::get('loanofficer/edit/{email}',                  [LoanofficerController::class,               'loanofficer_edit'])->name('admin.loanofficer_edit');
Route::delete('loanofficer/delete/{email}',             [LoanofficerController::class,               'loanofficer_delete'])->name('admin.loanofficer_delete');





// Customer  
Route::get('customer_form',                             [CustomerController::class,                   'customer_form']);
Route::post('customer_form',                            [CustomerController::class,                   'store']);
Route::get('customer_list',                             [CustomerController::class,                   'customer_list'])->name('customer_list');
Route::get('customer/{id}/view',                        [CustomerController::class,                   'view'])->name('customer.view');
Route::get('customer/{id}/edit',                        [CustomerController::class,                   'edit'])->name('customer.edit');
Route::put('customer/{id}',                             [CustomerController::class,                   'update'])->name('customer.update');

// EMI Calculator  
Route::get('/emi_calculator',                           [EmiCalculatorController::class,              'index'])->name('emi.index');
Route::post('/calculate-emi',                           [EmiCalculatorController::class,              'calculateEmi'])->name('emi.calculate');
Route::post('/emi/store',                               [EmiCalculatorController::class,              'store'])->name('emi.store');


// Loan  
Route::post('/loan/step1',                              [LoanController::class,                       'store'])->name('loan.step1');
Route::get('/loan/success/{id}',                        [LoanController::class,                       'show'])->name('loan.show');
Route::get('/manager/loan_list',                        [LoanController::class,                       'loan_list']);
