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
            "answer" => $this->URLAnswer(),
            "mark" => $this->mark,
            "group" => $this->whenLoaded('question')->mainQuestion->group->title,
            "question" => $this->whenLoaded('question'),
            "child" => new ChildResource($this->whenLoaded('child')),
        ];
    }
}
