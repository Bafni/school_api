<?php

namespace App\Http\Resources\Rooms;

use Illuminate\Http\Resources\Json\JsonResource;

class RoomsResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'user_id' =>$this->user_id,
        ];
    }
}
