<?php

namespace App\Http\Controllers\Modules;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Modules;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ModulesController extends Controller {
    public function getAllModules(){
        $courses = Modules::with('subModules')->get();

        return ApiResponse::successResponse($courses);
    }

    public function getModuleById(int $id){
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

    public function updateModuleById(Request $request, int $id){
        $module = Modules::findOrFail($id);
        $module->update($request->all());

        return ApiResponse::successResponse($module);
    }
}
