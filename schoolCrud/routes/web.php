<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use GuzzleHttp\Middleware;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    'students/trash/{id}',
    [StudentController::class, 'trash']
)->middleware(['auth', 'verified'])->name('students.trash');

Route::get(
'students/trashed/{id}',
[StudentController::class, 'trashed']
)->middleware(['auth', 'verified'])->name('students.trashed');

Route::get(
'students/restore/{id}',
[StudentController::class, 'trash']
)->middleware(['auth', 'verified'])->name('students.restore');

Route::resource('students', StudentController::class)->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
