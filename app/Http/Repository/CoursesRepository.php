<?php

namespace App\Http\Repository;

use App\Http\Repository\Interfaces\CoursesRepositoryInterfaces;
use App\Models\Courses;
use Illuminate\Config\Repository;
use Illuminate\Http\Request;

class CoursesRepository implements CoursesRepositoryInterfaces{
    public function getAll(?array $relations){
        return Courses::with($relations)->get();
    }
    public function createCourse(Request $request){
        return Courses::create($request);
    }
    public function deleteCourse(int $id){
        return null;
    }
}