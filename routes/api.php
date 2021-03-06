<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiStudentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create_student', [apiStudentController::class, 'create']);
Route::get('/show-students', [apiStudentController::class, 'show']);
Route::get('/show-student/{id}', [apiStudentController::class, 'showById']);
Route::put('/update-student/{id}', [apiStudentController::class, 'update']);
Route::delete('/delete-student/{id}', [apiStudentController::class, 'delete']);
