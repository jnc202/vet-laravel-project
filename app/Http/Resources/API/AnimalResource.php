<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class AnimalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "name" => $this->name,
            "type" => $this->type,
            "weight" => $this->weight,
            "dangerous" => $this->dangerous(),
            "owner_name" => $this->owner->fullName(), //added this in and not tested.
            "treatments" => $this->treatments->pluck("name"),
        ];
    }
}
