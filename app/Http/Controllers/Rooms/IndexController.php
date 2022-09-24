<?php

namespace App\Http\Controllers\Rooms;

use App\Http\Controllers\Controller;
use App\Http\Resources\Rooms\RoomsResource;
use App\Models\Rooms;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function __invoke(Request $request)
    {
        $models = Rooms::all();

        return RoomsResource::collection($models);
    }
}
