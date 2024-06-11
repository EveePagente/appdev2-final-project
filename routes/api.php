<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);

Route::put('/tasks/{id}', [TaskController::class, 'update']);
 Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);

Route::middleware('auth:sanctum')->group(function () {
Route::post('logout', [UserController::class, 'logout']);
Route::apiResource('tasks', TaskController::class);
Route::apiResource('categories', CategoryController::class);
// Route::put('categories/{id}', [CategoryController::class, 'update']);
});
