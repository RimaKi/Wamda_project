<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=>$this->_id,
            "groupId" => $this->whenNotNull($this->groupId),
            "group"=>new GroupResource($this->whenLoaded('group')),
            'text' => $this->whenNotNull($this->text),
            'mainQuestionId' => $this->whenNotNull($this->mainQuestionId),
            "mainQuestion"=> new QuestionResource($this->whenLoaded('mainQuestion')),
            "branchQuestion"=>QuestionResource::collection($this->whenLoaded('branchesQuestion')),
            "word" => $this->whenNotNull($this->word),
            "sentence" => $this->whenNotNull($this->sentence),
            "options" => $this->whenNotNull($this->options),
            "answer" => $this->whenNotNull($this->answer),
            "typeQuestion" => $this->whenNotNull($this->typeQuestion),
            "typeAnswer" => $this->whenNotNull($this->typeAnswer),
            "mark" => $this->whenNotNull($this->mark)
        ];
    }
}
