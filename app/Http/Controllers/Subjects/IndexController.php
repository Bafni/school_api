<?php

namespace App\Http\Controllers\Subjects;

use App\Http\Controllers\Controller;
use App\Http\Resources\Subjects\SubjectsResource;
use App\Models\Subject;


class IndexController extends Controller
{

    public function __invoke()
    {
        $subjects = Subject::all();

        return SubjectsResource::collection($subjects);
    }
}
