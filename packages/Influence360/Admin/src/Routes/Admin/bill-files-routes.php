<?php

use Illuminate\Support\Facades\Route;
use Influence360\Admin\Http\Controllers\BillFiles\BillFileController;

Route::prefix('bill-files')->group(function () {
    Route::controller(BillFileController::class)->group(function () {
        Route::get('', 'index')->name('admin.bill-files.index');

        Route::get('create', 'create')->name('admin.bill-files.create');

        Route::post('create', 'store')->name('admin.bill-files.store');

        Route::get('view/{id}', 'show')->name('admin.bill-files.view');

        Route::get('edit/{id}', 'edit')->name('admin.bill-files.edit');

        Route::put('edit/{id}', 'update')->name('admin.bill-files.update');

        Route::get('search', 'search')->name('admin.bill-files.search');

        Route::middleware(['throttle:100,60'])->delete('{id}', 'destroy')->name('admin.bill-files.delete');

        Route::post('mass-destroy', 'massDestroy')->name('admin.bill-files.mass-delete');

        // If you need tag functionality for bill files, add it here
        // Route::controller(TagController::class)->prefix('{id}/tags')->group(function () {
        //     Route::post('', 'attach')->name('admin.bill-files.tags.attach');
        //     Route::delete('', 'detach')->name('admin.bill-files.tags.detach');
        // });

        // If you need activity functionality for bill files, add it here
        // Route::controller(ActivityController::class)->prefix('{id}/activities')->group(function () {
        //     Route::get('', 'index')->name('admin.bill-files.activities.index');
        // });
    });
});
