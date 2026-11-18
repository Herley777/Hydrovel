<?php

use App\Http\Controllers\LeituraSensorController;
use App\Http\Controllers\ProfileController;
use App\Models\LeituraSensor;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $leituras = LeituraSensor::latest()->take(20)->get();

    $ultimaLeitura = $leituras->first();

    return view('dashboard', compact('leituras', 'ultimaLeitura'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

    Route::get('/sensores', [LeituraSensorController::class, 'index'])
        ->name('sensores.index');

    Route::get('/sensores/create', [LeituraSensorController::class, 'create'])
        ->name('sensores.create');

    Route::post('/sensores', [LeituraSensorController::class, 'store'])
        ->name('sensores.store');

    Route::get('/sensores/{id}/edit', [LeituraSensorController::class, 'edit'])
        ->whereNumber('id')
        ->name('sensores.edit');

    Route::put('/sensores/{id}', [LeituraSensorController::class, 'update'])
        ->whereNumber('id')
        ->name('sensores.update');

    Route::delete('/sensores/{id}', [LeituraSensorController::class, 'destroy'])
        ->whereNumber('id')
        ->name('sensores.destroy');
});

require __DIR__.'/auth.php';

Route::fallback(function () {
    return response('Página não encontrada.', 404);
});