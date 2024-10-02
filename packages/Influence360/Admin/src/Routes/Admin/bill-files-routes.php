<?php
use Illuminate\Support\Facades\Route;
use Influence360\Admin\Http\Controllers\BillFiles\BillFileController;

Route::controller(BillFileController::class)->prefix('bill-files')->group(function () {
    Route::get('', 'index')->name('admin.bill-files.index');
    Route::get('view/{id}', 'view')->name('admin.bill-files.view');
});
