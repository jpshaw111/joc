<?php

use App\Http\Controllers\ConductorController;
use App\Http\Controllers\ContractorController;
use App\Http\Controllers\JobOrderController;
use App\Http\Controllers\JobOrderStatementController;
use App\Http\Controllers\TypeOfWorkController;
use Illuminate\Support\Facades\Route;

#Type OF Work
Route::get('/', [TypeOfWorkController::class, 'index'])->name('create-type-of-work');
Route::get('/listing-type-of-work', [TypeOfWorkController::class, 'show'])->name('listing-type-of-work');
Route::get('/edit-type-of-work/{id}', [TypeOfWorkController::class, 'edit'])->name('edit-type-of-work');
Route::post('/save-type-of-work', [TypeOfWorkController::class, 'saveTypeofWork'])->name('save-type-of-work');
Route::post('/update-type-of-work', [TypeOfWorkController::class, 'updateTypeOfWork'])->name('update-type-of-work');
Route::get('/delete-type-of-work/{id}', [TypeOfWorkController::class, 'deleteTypeOfWork'])->name('delete-type-of-work');

#Contractors
Route::get('/create-contractors', [ContractorController::class, 'index'])->name('create-contractors');
Route::get('/listing-contractors', [ContractorController::class, 'show'])->name('listing-contractors');
Route::get('/edit-contractors/{id}', [ContractorController::class, 'edit'])->name('edit-contractors');

#Conductor
Route::get('/create-conductors', [ConductorController::class, 'index'])->name('create-conductors');
Route::get('/listing-conductors', [ConductorController::class, 'show'])->name('listing-conductors');
Route::get('/edit-conductors/{id}', [ConductorController::class, 'edit'])->name('edit-conductors');

#Job Orders
Route::get('/create-job-orders', [JobOrderController::class, 'index'])->name('create-job-orders');
Route::get('/listing-job-orders', [JobOrderController::class, 'show'])->name('listing-job-orders');
Route::get('/edit-job-orders/{id}', [JobOrderController::class, 'edit'])->name('edit-job-orders');


#Job Order Statements
Route::get('/create-job-order-statements', [JobOrderStatementController::class, 'index'])->name('create-job-order-statements');
Route::get('/generate-jos', [JobOrderStatementController::class, 'generateJOS'])->name('generate-jos');
Route::post('/save-job-order-statements', [JobOrderStatementController::class, 'store'])->name('jos.store');
Route::get('/view-jos', [JobOrderStatementController::class, 'viewJOS'])->name('view-jos');
Route::put('/jos/{id}/update', [JobOrderStatementController::class, 'updateJOS'])->name('jos.update');
Route::get('/view-job-orders-by-jos/{id}', [JobOrderStatementController::class, 'viewJobOrderByJOS'])->name('view-job-orders-by-jos');
