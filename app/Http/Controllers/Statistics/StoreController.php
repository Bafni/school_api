<?php

namespace App\Http\Controllers\Statistics;

use App\Http\Controllers\Controller;
use App\Http\Requests\Statistics\StoreRequest;
use App\Http\Resources\Statistics\StatisticsResource;
use App\Models\Statistic;


class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();


        $statistic = Statistic::create($data);

        return new StatisticsResource($statistic);
    }
}
