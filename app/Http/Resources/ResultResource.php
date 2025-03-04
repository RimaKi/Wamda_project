<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ResultResource extends JsonResource
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
            "questionId" => $this->questionId,
            "childId" => $this->childId,
            "answer" => $this->answer,
            "mark" => $this->mark,
            "question" => $this->whenLoaded('question'),
            "child" => new ChildResource($this->whenLoaded('child')),
        ];
    }
}
