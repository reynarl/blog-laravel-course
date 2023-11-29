<?php

use App\Http\Controllers\AdminhomeController;
use Illuminate\Support\Facades\Route;

Route::get('', [AdminhomeController::class, 'index'])->name('admin.home');
