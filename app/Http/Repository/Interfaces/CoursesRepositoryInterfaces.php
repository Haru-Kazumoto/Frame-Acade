<?php

namespace App\Http\Repository\Interfaces;

use Illuminate\Http\Request;

interface CoursesRepositoryInterfaces {
    public function getAll(?array $relations);
    public function createCourse(Request $request);
    public function deleteCourse(int $id);
}