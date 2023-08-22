<?php

namespace App\Http\Controllers\Courses\Api;

use App\Helpers\ApiResponse;
use App\Http\Repository\Interfaces\CoursesRepositoryInterfaces;
use Illuminate\Http\Request;

class CoursesController {
    private CoursesRepositoryInterfaces $coursesRepository;

    public function __construct(CoursesRepositoryInterfaces $coursesRepository){
        $this->coursesRepository = $coursesRepository;
    }

    public function getAllCourses(){
        $courses = $this->coursesRepository->getAll(
            [
                'modules',
                'modules.subModules'
            ]
        );

        return ApiResponse::successResponse($courses);
    }

    public function createCourse(Request $request){
        $request->validate([
            'name' => [
                'required',
                'string'
            ],
            "type" => [
                'required',
                'string'
            ],
            "description" => [
                'required',
                'string'
            ],
            "logo" => [
                'required',
                'string'
            ]
        ]);
        $data = $this->createCourse($request);

        return ApiResponse::successResponse($data);
    }
}