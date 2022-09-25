<?php

namespace App\Http\Controllers\Rooms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Rooms\UpdateRequest;
use App\Http\Resources\Rooms\RoomsResource;
use App\Models\Rooms;

class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, Rooms $model)
    {
        $data = $request->validated();

        $model->update($data);

        return new RoomsResource($model);
    }
}
