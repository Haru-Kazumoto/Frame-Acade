<?php

namespace Tests\Feature;

use App\Models\Courses;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CoursesTest extends TestCase {
    public function testGetNameCourse(): void {
        $courses = Courses::all();

        $getNameCourse = $courses->name;
        $this->assertNotNull($getNameCourse);
    }
}
