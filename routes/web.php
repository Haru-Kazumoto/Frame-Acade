<?php

use App\Http\Controllers\CertificationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Courses\MyCoursesController;
use App\Http\Controllers\Courses\AllCoursesController;
use App\Models\Certifications;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get("/my-courses",[MyCoursesController::class,'index'])->name("my-courses");
    Route::get("/all-courses",[AllCoursesController::class,'index'])->name("all-courses");
    Route::get("/course/{id}",[AllCoursesController::class,"detail"])->name("detail-course");
    Route::get("/enrolled/{course_id}",[AllCoursesController::class,"enrolled"])->name("enrolled-courses");
    Route::get("/learn/{course_id}",[MyCoursesController::class,"learn"])->name("learn-course");
    Route::get("/learn/{course_id}/module/{submodule_id}",[MyCoursesController::class,'content'])->name("read-blog");
    Route::get("/next/{course_id}/{submodule_id}",[MyCoursesController::class,"next"])->name("next-course");
    Route::get("/reward",[MyCoursesController::class,"certificate"])->name("cs");
    Route::get("/certification",[CertificationController::class, 'index'])->name("certification");
    Route::get("/notifications", [MyCoursesController::class, 'notifications'])->name("notifications");
});

Route::middleware('auth')->prefix("/certifications")->group(function () {
    Route::get("", [CertificationController::class, 'download']);
});

Route::get('/test', [CertificationController::class, 'get']);

require __DIR__.'/auth.php';
