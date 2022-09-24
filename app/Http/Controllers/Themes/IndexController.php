<?php

namespace App\Http\Controllers\Themes;

use App\Http\Controllers\Controller;
use App\Http\Resources\Themes\ThemesResource;
use App\Models\Theme;


class IndexController extends Controller
{

    public function __invoke()
    {
        $theme = Theme::all();

        return ThemesResource::collection($theme);
    }
}
