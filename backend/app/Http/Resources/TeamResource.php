<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TeamResource extends JsonResource
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
            "country" => $this->country,  
            "city" => $this->city,  
            "stadium" => $this->stadium,  
            "stadium_size" => $this->stadium_size,  
            "current_players" => PlayerResource::collection($this->whenLoaded("currentPlayers")),  
        ];
    }
}
