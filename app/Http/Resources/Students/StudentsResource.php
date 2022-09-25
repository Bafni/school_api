<?php

namespace App\Http\Resources\Students;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentsResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'user_id' =>$this->user_id,
            'room_id' =>$this->user_id,
        ];
    }
}
