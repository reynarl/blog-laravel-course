<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\AdminhomeController;
use Illuminate\Support\Facades\Route;

Route::get('', [AdminhomeController::class, 'index'])->name('admin.home');

Route::resource('categories', CategoryController::class)->names('admin.categories');
