<?php

use Illuminate\Http\Request;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/data-company', [DataController::class, 'company']);
Route::post('/data-department', [DataController::class, 'department']);
Route::post('/data-role', [DataController::class, 'role']);
Route::post('/data-user', [DataController::class, 'user']);
Route::post('/data-cate-book', [DataController::class, 'cate_book']);
Route::post('/data-book', [DataController::class, 'book']);
