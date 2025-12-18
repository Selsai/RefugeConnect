<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AnimalController;

Route::get('/', [IndexController::class, 'index'])
    ->name('home');

Route::prefix('animaux')->group(function () {
    Route::get('/ajouter', [AnimalController::class, 'createStatic'])
        ->name('animals.create-static');

    Route::get('/modifier/{id}', [AnimalController::class, 'updateStatic'])
        ->name('animals.update-static');

    Route::get('/supprimer/{id}', [AnimalController::class, 'delete'])
        ->name('animals.delete');

    Route::get('/{id}', [AnimalController::class, 'show'])
        ->name('animals.show');
});

Route::fallback(function () {
    return response()->view('errors.not-found', [], 404);
});
