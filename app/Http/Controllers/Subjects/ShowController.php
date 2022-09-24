<?php

namespace App\Http\Controllers\Subjects;

use App\Http\Controllers\Controller;


use App\Http\Resources\Subjects\SubjectsResource;
use App\Models\Subject;

class ShowController extends Controller
{

    public function __invoke(Subject $subject)
    {
        return new SubjectsResource($subject);
    }
}
