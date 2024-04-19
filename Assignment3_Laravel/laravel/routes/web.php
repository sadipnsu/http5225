<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    'employees/trash/{id}',
    [EmployeeController::class, 'trash']
)->middleware(['auth', 'verified'])->name('employees.trash');

Route::get(
'employees/trashed/{id}',
[EmployeeController::class, 'trashed']
)->middleware(['auth', 'verified'])->name('employees.trashed');

Route::get(
'employees/restore/{id}',
[EmployeeController::class, 'trash']
)->middleware(['auth', 'verified'])->name('employees.restore');

Route::resource('employees', EmployeeController::class)->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
