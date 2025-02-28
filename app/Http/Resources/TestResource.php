<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TestResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "title" => $this->title,
            "minimumMark" => $this->minimumMark,
            "subject" => $this->subject,
            "id" => $this->id,
            "questions" => $this->whenLoaded("questions")
        ];
    }
}
