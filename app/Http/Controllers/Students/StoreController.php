<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Http\Requests\Students\StoreRequest;
use App\Http\Resources\Students\StudentsResource;
use App\Models\Student;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $student = Student::create($data);

        return new StudentsResource($student);
    }
}
