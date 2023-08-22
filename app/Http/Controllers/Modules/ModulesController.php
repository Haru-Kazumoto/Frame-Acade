<?php

namespace App\Http\Controllers;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ModulesController extends Controller {
    public function getAllCourse(){
        $courses = Courses::with(
            [
                "modules",
                "modules.subModules"
            ])->get();

        return ApiResponse::successResponse($courses);
    }

    public function getCourseById(int $id){
        try {
            $course = Courses::findOrFail($id);
            return ApiResponse::successResponse($course);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                "status" => "404",
                "message" => "Course not found",
                "data" => null
            ], 404);
        }
    }
}
