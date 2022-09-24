<?php

namespace App\Http\Resources\Statistics;

use Illuminate\Http\Resources\Json\JsonResource;

class StatisticsResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'student_id' =>$this->student_id,
            'theme_id' =>$this->theme_id,
            'name' =>$this->name,
            'user_id' =>$this->user_id,
            'rate' =>$this->rate,
            'date' =>$this->date,
        ];
    }
}
