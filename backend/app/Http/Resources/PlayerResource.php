<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PlayerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "number" => $this->number,
            "position" => $this->position,
            "nationality" => $this->nationality,
            "date_of_birth" => $this->date_of_birth,
            "height" => $this->height,
            "teams" => TeamResource::collection($this->whenLoaded("teams")),
        ];
    }
}
