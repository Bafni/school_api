<?php

namespace App\Http\Controllers\Taxonomies;

use App\Http\Controllers\Controller;
use App\Http\Requests\Taxonomies\StoreRequest;
use App\Http\Resources\Taxonomies\TaxonomiesResource;
use App\Models\Taxonomy;


class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        
        $data['data'] = json_encode($data['data']);

        $taxonomy = Taxonomy::create($data);

        return new TaxonomiesResource($taxonomy);
    }
}
