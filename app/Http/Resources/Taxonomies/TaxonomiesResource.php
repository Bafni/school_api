<?php

namespace App\Http\Resources\Taxonomies;

use Illuminate\Http\Resources\Json\JsonResource;

class TaxonomiesResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'name' =>$this->name,
            'taxonomy_type' =>$this->taxonomy_type,
            'data' => json_decode($this->data),
            'parent_id' =>$this->subject_id,
            'user_id' =>$this->user_id,
        ];
    }
}
