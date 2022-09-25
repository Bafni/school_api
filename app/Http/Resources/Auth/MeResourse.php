<?php

namespace App\Http\Resources\Auth;

use Illuminate\Http\Resources\Json\JsonResource;

class MeResourse extends JsonResource
{

    public function toArray($request)
    {
        return [
            'user' => [
                'email' => $this->email,
                'role' => $this->role
            ]
        ];
    }
}
