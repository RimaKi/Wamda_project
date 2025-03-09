<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->_id,
            "firstName" => $this->firstName,
            "lastName" => $this->lastName,
            "email" => $this->email,
            "phone" => $this->phone,
            "address" => $this->address,
            "role" => $this->role,
            "isMale" => $this->isMale,
            $this->mergeWhen($this->role == "expert", [
                "summary" => $this->summary,
                "certification" => $this->certification,
            ]),
            "children" => $this->whenLoaded('children')
        ];

    }
}
