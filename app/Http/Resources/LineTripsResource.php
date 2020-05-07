<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LineTripsResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'line_id'=>$this->line_id,
            'from_city'=>$this->line->fromCity->name,
            'to_city'=>$this->line->toCity->name,
        ];
    }
}
