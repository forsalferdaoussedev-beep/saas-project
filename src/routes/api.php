<?php

use Illuminate\Support\Facades\Route;

Route::prefix('v1')->name('api.v1.')->group(function () {
    // Auth routes (Phase 3)
    require __DIR__ . '/api/v1/auth.php';

    // Protected routes
    Route::middleware('auth:sanctum')->group(function () {
        // Project routes (Phase 5)
        // Task routes (Phase 5)
    });
});