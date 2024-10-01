<?php

use Illuminate\Support\Facades\Route;
use Influence360\Admin\Http\Controllers\Controller;

/**
 * Home routes.
 */
Route::get('/', [Controller::class, 'redirectToLogin'])->name('krayin.home');
