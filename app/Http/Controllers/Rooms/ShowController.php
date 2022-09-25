<?php

namespace App\Http\Controllers\Rooms;

use App\Http\Controllers\Controller;
use App\Http\Resources\Rooms\RoomsResource;
use App\Models\Rooms;

class ShowController extends Controller
{

    public function __invoke(Rooms $model)
    {
        return new RoomsResource($model);
    }
}
