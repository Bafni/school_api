<?php

namespace App\Http\Controllers\Taxonomies;

use App\Http\Controllers\Controller;
use App\Http\Resources\Taxonomies\TaxonomiesResource;
use App\Models\Taxonomy;


class ShowController extends Controller
{

    public function __invoke(Taxonomy $taxonomy)
    {
        return new TaxonomiesResource($taxonomy);
    }
}
