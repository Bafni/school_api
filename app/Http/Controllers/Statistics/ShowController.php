<?php

namespace App\Http\Controllers\Statistics;

use App\Http\Controllers\Controller;
use App\Http\Resources\Statistics\StatisticsResource;
use App\Models\Statistic;


class ShowController extends Controller
{

    public function __invoke(Statistic $statistic)
    {
        return new StatisticsResource($statistic);
    }
}
