<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Http\Resources\Students\StudentsResource;
use App\Models\Student;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function __invoke(Request $request)
    {
        $students = Student::all();

        return StudentsResource::collection($students);
    }
}
