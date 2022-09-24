<?php

namespace App\Http\Resources\Themes;

use Illuminate\Http\Resources\Json\JsonResource;

class ThemesResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'user_id' =>$this->user_id,
            'subject_id' =>$this->subject_id,
            'date' =>$this->date,
            'name' =>$this->name,
        ];
    }
}
