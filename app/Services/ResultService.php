<?php

namespace App\Services;

use App\Models\Child;
use App\Models\Group;
use App\Models\Question;
use App\Models\Result;
use Illuminate\Support\Facades\Storage;

class ResultService
{
    //مقارنة مصفوفتين بغض النظر عن نوع العناصر
    protected function compareArrays(array $array1, string $answerString, bool $strictOrder = false): bool
    {
        $array2 = explode(";", $answerString);
        $collection1 = collect($array1)->map(fn($item) => (string)$item);
        $collection2 = collect($array2)->map(fn($item) => (string)$item);

        return $strictOrder
            ? $collection1->toArray() === $collection2->toArray()
            : $collection1->count() === $collection2->count()
            && $collection1->diff($collection2)->isEmpty()
            && $collection2->diff($collection1)->isEmpty();
    }

    public function storeResult(array $data)
    {
        foreach ($data['answers'] as $answer) {
            $answer['childId'] = $data['childId'];
            $question = Question::findOrFail($answer['questionId']);

            if ($question->typeAnswer == 'صوت') {
                $answer['answer'] = Storage::disk('public')->put('answers/' . $answer['childId'], $answer['answer']);
                Result::create($answer);
                continue;
            }

            $isCorrect = match ($question->typeAnswer) {
                'اختيار متعدد', 'توصيل بشكل عشوائي' => $this->compareArrays($question->answer, $answer['answer']),
                'مصفوفة مرتبة' => $this->compareArrays($question->answer, $answer['answer'], true),
                default => (string)$question->answer == (string)$answer['answer'],
            };

            $answer['mark'] = $question->typeAnswer == 'صورة' ? null : ($isCorrect ? $question->mark : 0);
            Result::create($answer);
        }

    }

    public function updateResult(Result $result, $mark)
    {
        if ($mark > $result->question()->first()->mark) {
            throw new \Exception('الدرجة المضافة غير صحيحة. يرجى التحقق وإعادة المحاولة');
        }
        $result->update(['mark' => $mark]);
        return $result;
    }

    public function testResult(Child $child)
    {
        $childId = $child->id; // معرف الطالب الذي تريد جلب نتائجه
        $groups = Group::with(['questions.branchesQuestion.results' => function ($query) use ($childId) {
            $query->where('childId', $childId);
        }])->get();

        $results = $groups->map(function ($group) {
            $totalMark = 0;
            $hasUncorrected = false;
            $hasUnanswered = false;


            foreach ($group->questions as $question) {
                foreach ($question->branchesQuestion as $item) {
                    $result = $item->results()->orderBy('updated_at', 'DESC')->first();
                    if (!$result) {
                        $hasUnanswered = true; // إذا لم يكن هناك نتيجة، فهذا يعني أن السؤال لم يُجب عليه
                        continue;
                    }
                    if ($result) {
                        if (is_null($result->mark)) {
                            $hasUncorrected = true;
                        } else {
                            $totalMark += $result->mark;
                        }
                    }
                }
            }
            return [
                'group_title' => $group->title,
                'subject' => $group->subject,
                'isDifficult'=>!$hasUnanswered && !$hasUncorrected ?$totalMark < $group->minimumMark:null,
                'total_mark' => $hasUnanswered ? "لم يتم الإجابة عن جميع أسئلة المعيار" : ($hasUncorrected ? "لم يتم التصحيح من قبل الخبير" : $totalMark),
            ];
        });
        return $results->groupBy('subject');
    }

}
