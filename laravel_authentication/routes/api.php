<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\CrudApiController;
use App\Http\Controllers\TestController;

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
Route::view('test-crud', 'test_' )->name('academic_form');
// Route::apiResource('/apiuser', CrudApiController::class);
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/', function () {
    return view('welcome');
});
Route::apiResource('/apiuser', CrudApiController::class);
Route::get('/demo', [TestController::class,'index']);
Route::post('/demo', [TestController::class,'store']);
Route::get('/demo/{id}', [TestController::class,'show']);
Route::delete('/demo/{user_id}', [TestController::class,'destroy']);
// Route::get('academic-form', [AcademicController::class,'create'])->name('academic_form');
// Route::view('academic-form', 'test_' )->name('academic_form');
