<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;

Route::get('/', function () {
    return view('welcome');
});

// Rute Buku Tamu
Route::prefix('tamu')->name('tamu.')->group(function () {
    Route::get('/', [TamuController::class, 'index'])->name('index');
    Route::get('/create', [TamuController::class, 'create'])->name('create');
    Route::post('/', [TamuController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [TamuController::class, 'edit'])->name('edit');
    Route::put('/{id}', [TamuController::class, 'update'])->name('update');
    Route::delete('/{id}', [TamuController::class, 'destroy'])->name('destroy');
});
