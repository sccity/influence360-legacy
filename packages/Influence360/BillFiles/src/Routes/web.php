<?php

use Illuminate\Support\Facades\Route;
use Influence360\BillFiles\Http\Controllers\BillFilesController;

Route::prefix('billfiles')->group(function () {
    Route::get('', [BillFilesController::class, 'index'])->name('admin.billfiles.index');
});
