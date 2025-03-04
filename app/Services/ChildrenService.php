<?php

namespace App\Services;

use App\Http\Resources\ChildResource;
use App\Http\Resources\GroupResource;
use App\Models\Child;

class ChildrenService
{
    public function showChild(Child $child){
        $answeredGroups = $child->results->pluck('question.mainQuestion.group')->unique();

        $fullyAnsweredGroups = $answeredGroups->filter(function ($group) use ($child) {
            if (!$group) return false;

            $mainQuestions = $group->questions()->pluck('_id');

            $allBranchQuestions = \App\Models\Question::whereIn('mainQuestionId', $mainQuestions)->pluck('_id');

            // جميع الأسئلة التي أجاب عنها الطفل في هذه المجموعة (الأسئلة الفرعية فقط)
            $answeredBranchQuestions = $child->results()
                ->whereIn('questionId', $allBranchQuestions)
                ->pluck('questionId')
                ->unique();

            // التحقق مما إذا كان الطفل أجاب عن جميع الأسئلة الفرعية في هذه المجموعة
            return $allBranchQuestions->diff($answeredBranchQuestions)->isEmpty();
        });
        return [
            'child' => new ChildResource($child),
            'answered_groups' => GroupResource::collection($answeredGroups)
        ];
    }

}
