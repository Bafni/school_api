<?php

namespace App\Http\Controllers\Rooms;

use App\Http\Controllers\Controller;
use App\Http\Requests\Rooms\StoreRequest;
use App\Http\Resources\Rooms\RoomsResource;
use App\Models\Rooms;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $model = Rooms::create($data);

        return new RoomsResource($model);
    }
}
