<?php

namespace App\Services;

use App\Models\Question;
use App\Models\Result;
use Illuminate\Support\Facades\Storage;

class ResultService
{
    //مقارنة مصفوفتين بغض النظر عن نوع العناصر
    private function compareArrays(array $array1, array $array2, bool $strictOrder = false): bool
    {
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
            $question = Question::find($answer['questionId']);

            if (!$question || in_array($question->typeAnswer, ['صوت', 'صورة'])) {
                $answer['answer'] = Storage::disk('public')->put('answers/' . $answer['childId'], $answer['answer']);
                Result::create($answer);
                return;
            }

            $isCorrect = match ($question->typeAnswer) {
                'اختيار متعدد', 'توصيل بشكل عشوائي' => $this->compareArrays($question->answer, $answer['answer']),
                'مصفوفة مرتبة' => $this->compareArrays($question->answer, $answer['answer'], true),
                default => (string)$question->answer == (string)$answer['answer'],
            };

            $answer['mark'] = $isCorrect ? $question->mark : 0;
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

}
