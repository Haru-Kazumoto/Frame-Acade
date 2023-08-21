<?php

use App\Http\Controllers\CertificationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Courses\MyCoursesController;
use App\Http\Controllers\Courses\AllCoursesController;

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
<<<<<<< HEAD
    return redirect('/login');
=======
     return redirect('/my-courses');
>>>>>>> 1fb497e53295c27f2a6cfcc9329f14ac146af5fa
});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get("/my-courses",[MyCoursesController::class,'index'])->name("my-courses");
    Route::get("/all-courses",[AllCoursesController::class,'index'])->name("all-courses");
    Route::get("/course/{id}",[AllCoursesController::class,"detail"])->name("detail-course");
    Route::get("/enrolled/{course_id}",[AllCoursesController::class,"enrolled"])->name("enrolled-courses");
    Route::get("/learn/{course_id}",[MyCoursesController::class,"learn"])->name("learn-course");
    Route::get("/reward",[MyCoursesController::class,"certificate"])->name("cs");
});

Route::middleware('auth')->prefix("/certifications")->group(function(){
    Route::get("",[CertificationController::class, 'download']);
});

Route::get('/test', [CertificationController::class, 'index']);

require __DIR__.'/auth.php';
