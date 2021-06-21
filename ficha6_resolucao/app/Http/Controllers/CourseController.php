<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    function show() {
        $courses = Course::all();
        return view('courses')
            ->with('courses', $courses);
    }

    function single($id) {
        $course = Course::findOrFail($id);
        // $course = Course::find($id);
        // if(!$course) {
        //     return "Erro";
        // }
        return view('course')
            ->with('course', $course);
    }
}
