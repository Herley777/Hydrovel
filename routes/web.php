
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
});

require __DIR__.'/auth.php';
