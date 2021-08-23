<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DepartmentController;
use App\Http\Controllers\API\CommentController;
use App\Http\Controllers\API\EmployeeController;
use App\Http\Controllers\API\EmployeeAddressController;
use App\Http\Controllers\API\EmployeePhoneNumberController;

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



/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::apiResource('departments', DepartmentController::class);
Route::apiResource('employees', EmployeeController::class);
Route::apiResource('comments', CommentController::class);
Route::apiResource('contacts', EmployeePhoneNumberController::class);
Route::apiResource('addresses', EmployeeAddressController::class);