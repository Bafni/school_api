<?php

namespace App\Http\Controllers\Taxonomies;

use App\Http\Controllers\Controller;
use App\Http\Resources\Taxonomies\TaxonomiesResource;
use App\Models\Taxonomy;


class IndexController extends Controller
{

    public function __invoke()
    {
        $taxonomies = Taxonomy::all();

        return TaxonomiesResource::collection($taxonomies);
    }
}
