<?php

use App\Http\Controllers\Api\v1\TaskController;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function () {
    Route::post('/task/create', [TaskController::class, 'store']);
    Route::get('/task/edit/{id}', [TaskController::class, 'edit']);
    Route::post('/task/update/{id}', [TaskController::class, 'update']);
    Route::delete('/task/delete/{id}', [TaskController::class, 'destroy']);
});
