<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Students Routes
Route::get('students/list', [StudentsController::class, 'index'])->name('students.list');
Route::get('students/add', [StudentsController::class, 'add'])->name('students.add');
Route::post('students/save', [StudentsController::class, 'save'])->name('students.save');
Route::get('students/edit/{id}', [StudentsController::class, 'edit'])->name('students.edit');
Route::put('students/update/{id}', [StudentsController::class, 'update'])->name('students.update');
Route::get('students/delete/{id}', [StudentsController::class, 'delete'])->name('students.delete');
