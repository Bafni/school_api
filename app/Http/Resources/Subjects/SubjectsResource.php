<?php

namespace App\Http\Resources\Subjects;

use Illuminate\Http\Resources\Json\JsonResource;

class SubjectsResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'user_id' =>$this->user_id,
            'room_id' =>$this->room_id,
            'name' =>$this->name,
        ];
    }
}
