<?php

namespace App\Http\Controllers\Statistics;

use App\Http\Controllers\Controller;
use App\Http\Requests\Statistics\UpdateRequest;
use App\Http\Resources\Statistics\StatisticsResource;
use App\Models\Statistic;


class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, Statistic $statistic)
    {
        $data = $request->validated();

        $statistic->update($data);

        return new StatisticsResource($statistic);
    }
}
