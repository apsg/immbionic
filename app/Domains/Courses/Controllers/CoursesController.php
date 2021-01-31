<?php
namespace App\Domains\Courses\Controllers;

use App\Domains\Courses\Models\Course;
use App\Http\Controllers\Controller;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::future()->get();

        return view('domains.courses.index')->with(compact('courses'));
    }
}
