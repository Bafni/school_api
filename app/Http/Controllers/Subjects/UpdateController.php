<?php

namespace App\Http\Controllers\Subjects;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subjects\UpdateRequest;
use App\Http\Resources\Subjects\SubjectsResource;
use App\Models\Subject;


class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, Subject $subject)
    {
        $data = $request->validated();

        $subject->update($data);

        return new SubjectsResource($subject);
    }
}
