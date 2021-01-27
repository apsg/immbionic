<?php
namespace App\Domains\Courses\Controllers;

use App\Http\Controllers\Controller;

class CoursesController extends Controller
{
    public function index()
    {
        return view('domains.courses.index');
    }
}
