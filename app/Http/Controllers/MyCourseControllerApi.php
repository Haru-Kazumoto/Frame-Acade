<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;

class MyCourseControllerApi extends Controller {
    public function getAllCourse(){
        $courses = Courses::with(["modules","modules.subModules"])->get();

        return ApiResponse::successResponse($courses);
    }
}
