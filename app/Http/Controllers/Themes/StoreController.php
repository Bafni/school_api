<?php

namespace App\Http\Controllers\Themes;

use App\Http\Controllers\Controller;
use App\Http\Requests\Themes\StoreRequest;
use App\Http\Resources\Themes\ThemesResource;
use App\Models\Theme;


class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $subject = Theme::create($data);

        return new ThemesResource($subject);
    }
}
