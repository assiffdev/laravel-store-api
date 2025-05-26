<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Http\Controllers\CsrfCookieController;
use App\Http\Controllers\API\SuperAdmin\UserController;
use App\Http\Controllers\API\StoreAdmin\UserController as StoreAdminUserController;
//use App\Http\Controllers\API\StoreUser;
use App\Http\Controllers\API\StoreUser\ProfileController as StoreUserProfileController;

Route::prefix('super-admin')
    ->middleware(['auth:sanctum', 'role:super-admin'])
    ->group(function () {
        Route::apiResource('users', UserController::class);
});

Route::prefix('store-admin')
    ->middleware(['auth:sanctum', 'role:store-admin'])
    ->group(function () {
        Route::apiResource('users', StoreAdminUserController::class);
});

Route::prefix('store-user')->middleware(['auth:sanctum', 'role:store-user'])->group(function () {
    Route::get('profile', [StoreUserProfileController::class, 'show']);
    Route::put('profile', [StoreUserProfileController::class, 'update']);
});
