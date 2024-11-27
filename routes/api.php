<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\LoanController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::prefix('users')->name('user.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');

    Route::get('/{id}', [UserController::class, 'show'])->name('show');
});

Route::prefix('clients')->name('clients.')->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('index');

    Route::get('/{id}', [ClientController::class, 'show'])->name('show');
});

Route::prefix('providers')->name('providers.')->group(function () {
    Route::get('/', [ProviderController::class, 'index'])->name('index');

    Route::get('/{id}', [ProviderController::class, 'show'])->name('show');
});

Route::prefix('loans')->name('loans.')->group(function () {
    Route::get('/', [LoanController::class, 'index'])->name('index');

    Route::get('/{id}', [LoanController::class, 'show'])->name('show');
});
