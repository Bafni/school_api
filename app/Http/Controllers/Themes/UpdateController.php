<?php

namespace App\Http\Controllers\Themes;

use App\Http\Controllers\Controller;
use App\Http\Requests\Themes\UpdateRequest;
use App\Http\Resources\Themes\ThemesResource;
use App\Models\Theme;


class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, Theme $theme)
    {
        $data = $request->validated();

        $theme->update($data);

        return new ThemesResource($theme);
    }
}
