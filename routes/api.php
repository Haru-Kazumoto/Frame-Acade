<?php

use App\Http\Controllers\{UserController, AuthController, CertificationController, ModulesController};
use App\Http\Controllers\Modules\SubModulesController;
use App\Http\Controllers\MyCourseControllerApi;
use Illuminate\Http\Request;
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

Route::prefix("/user")->group(function(){
    Route::get("/get-all", [UserController::class, 'index']);
    Route::post("/create", [UserController::class, 'create']);
    Route::get("/get/{id}", [UserController::class, 'show']);
    Route::patch("/update/{id}", [UserController::class, 'edit']);
    Route::delete("/delete", [UserController::class, 'destroy']);
});

Route::prefix('/auth')->group(function(){
    Route::post("/login", [AuthController::class, 'login']);
    Route::post("/register", [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
    Route::get("/get-session", [AuthController::class, 'getSessionUser'])->middleware('auth:sanctum');
});

Route::get('/modules', [CertificationController::class, 'index']);

Route::get('/all-course', [MyCourseControllerApi::class, 'getAllCourse']);

Route::prefix("/modules")->group(function(){
    Route::get('/subModules', [SubModulesController::class, 'index']);
    Route::post('/create-subModules', [SubModulesController::class, 'create']);
    Route::get('/get/{$id}', [ModulesController::class], 'getCourseById');
});