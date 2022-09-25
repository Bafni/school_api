<?php

namespace App\Http\Controllers\Taxonomies;

use App\Http\Controllers\Controller;
use App\Http\Requests\Taxonomies\UpdateRequest;
use App\Http\Resources\Taxonomies\TaxonomiesResource;
use App\Models\Taxonomy;


class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, Taxonomy $taxonomy)
    {
        $data = $request->validated();

        $data['data'] = json_encode($data['data']);

        $taxonomy->update($data);

        return new TaxonomiesResource($taxonomy);
    }
}
