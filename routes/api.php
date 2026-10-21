<?php

use App\Http\Controllers\LeituraSensorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/leituras', [
    LeituraSensorController::class,
    'store'
])->middleware('chave.sensor');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
