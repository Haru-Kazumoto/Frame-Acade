<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Models\Courses;

class MyCoursesController extends Controller
{

    public function index() {

        $courses = Courses::all();

        return view("my-course")->with("courses",$courses);
    }
}
