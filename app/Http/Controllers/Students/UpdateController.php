<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Http\Requests\Students\UpdateRequest;
use App\Http\Resources\Students\StudentsResource;
use App\Models\Student;

class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, Student $student)
    {
        $data = $request->validated();

        $student->update($data);

        return new StudentsResource($student);
    }
}
