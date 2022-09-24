<?php

namespace App\Http\Controllers\Statistics;

use App\Http\Controllers\Controller;
use App\Http\Resources\Statistics\StatisticsResource;
use App\Models\Statistic;


class IndexController extends Controller
{

    public function __invoke()
    {
        $statistic = Statistic::all();

        return StatisticsResource::collection($statistic);
    }
}
