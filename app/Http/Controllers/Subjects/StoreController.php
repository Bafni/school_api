<?php

namespace App\Http\Controllers\Subjects;

use App\Http\Controllers\Controller;

use App\Http\Requests\Subjects\StoreRequest;
use App\Http\Resources\Subjects\SubjectsResource;
use App\Models\Subject;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $subject = Subject::create($data);

        return new SubjectsResource($subject);
    }
}
