<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Http\Resources\Students\StudentsResource;
use App\Models\Student;

class ShowController extends Controller
{

    public function __invoke(Student $student)
    {
        return new StudentsResource($student);
    }
}
