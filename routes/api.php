<?php

use App\Http\Controllers\Api\V1\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Tanpa prefix v1
Route::prefix('v1')->group(function () {
    Route::apiResource('tasks', TaskController::class);
});