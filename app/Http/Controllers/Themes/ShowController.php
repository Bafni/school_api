<?php

namespace App\Http\Controllers\Themes;

use App\Http\Controllers\Controller;
use App\Http\Resources\Themes\ThemesResource;
use App\Models\Theme;


class ShowController extends Controller
{

    public function __invoke(Theme $theme)
    {
        return new ThemesResource($theme);
    }
}
