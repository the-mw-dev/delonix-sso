<?php

use Illuminate\Support\Facades\Route;
use WemX\Sso\Http\Controllers\SsoController;

Route::middleware(['web'])->group(function () {
    Route::get('/sso-delonix', [SsoController::class, 'webhook']);
    Route::get('/sso-delonix/{token}', [SsoController::class, 'handle'])->name('sso-delonix.login');
});
