<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\REcordController;

Route::get('/', [REcordController::class, 'index'])->name('book');

Route::post('/create', [REcordController::class, 'create'])->name('create');

Route::post('/update/{id}', [REcordController::class, 'store'])->name('store');

Route::get('/useful', [REcordController::class, 'useful'])->name('useful');
