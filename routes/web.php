<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

Route::get('/', [UserController::class, 'index'])->name('users.index');

Route::get('/create', [UserController::class, 'create'])->name('users.create');
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::post('/dashboard', [UserController::class, 'store'])->name('users.store');
Route::get('/destroy', [UserController::class, 'destroy'])->name('users.destroy');