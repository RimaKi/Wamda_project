<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Question;
use Illuminate\Database\Seeder;

class MathSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeQuestion = ['عرض أشكال', 'عرض الكلمة', 'اختر الإجابة', 'عرض على مستقيم الأعداد',
            'عرض الخيارات', 'عرض الأعداد', 'عملية جمع', 'عملية طرح' ,'توصيل','اختيار','ترتيب','تحليل','قراءة','كتابي'];

        $typeAnswer = ['إدخال رقم', 'صوت', 'اختيار خيار واحد', 'اختيار متعدد', 'مصفوفة مرتبة','توصيل بشكل عشوائي','نص','صورة'];

        $questions = [
            //Group 1
            [
                "groupId" => Group::where("title", "قراءة و كتابة الأعداد ضمن العدد 20")->first()->_id,
                'text' => "عد الأشكال التالية",   // الطالب يبعث رقم الأشكال
                "branchQuestion" => [
                    [
                        'typeQuestion' => 'عرض أشكال',
                        'typeAnswer' => 'إدخال رقم',
                        "answer" => 5,
                        "mark" => 10
                    ],
                    [
                        'typeQuestion' => 'عرض أشكال',
                        'typeAnswer' => 'إدخال رقم',
                        "answer" => 13,
                        "mark" => 10
                    ],
                    [
                        'typeQuestion' => 'عرض أشكال',
                        'typeAnswer' => 'إدخال رقم',
                        "answer" => 17,
                        "mark" => 10
                    ],
                    [
                        'typeQuestion' => 'عرض أشكال',
                        'typeAnswer' => 'إدخال رقم',
                        "answer" => 8,
                        "mark" => 10
                    ],
                    [
                        'typeQuestion' => 'عرض أشكال',
                        'typeAnswer' => 'إدخال رقم',
                        "answer" => 3,
                        "mark" => 10
                    ],
                ]
            ],
            [
                "groupId" => Group::where("title", "قراءة و كتابة الأعداد ضمن العدد 20")->first()->_id,
                'text' => "ادخل الأعداد التالية",
                "branchQuestion" => [
                    [
                        'typeQuestion' => 'عرض الكلمة',
                        'typeAnswer' => 'إدخال رقم',
                        'word' => 'العدد عشرون',
                        "answer" => 20,
                        "mark" => 10

                    ],
                    [
                        'typeQuestion' => 'عرض الكلمة',
                        'typeAnswer' => 'إدخال رقم',
                        'word' => 'العدد أحد عشر',
                        "answer" => 11,
                        "mark" => 10
                    ],
                    [
                        'typeQuestion' => 'عرض الكلمة',
                        'typeAnswer' => 'إدخال رقم',
                        'word' => 'العدد سبعة',
                        "answer" => 7,
                        "mark" => 10
                    ],
                ]
            ],
            [
                "groupId" => Group::where("title", "قراءة و كتابة الأعداد ضمن العدد 20")->first()->_id,
                'text' => "عد الأشكال التالية", // الطالب يسجل صوت وهو عم يعد
                "branchQuestion" => [
                    [
                        'typeQuestion' => 'عرض أشكال',
                        'typeAnswer' => 'صوت',
                        "answer" => 20,
                        "mark" => 10
                    ],
                    [
                        'typeQuestion' => 'عرض أشكال',
                        'typeAnswer' => 'صوت',
                        "answer" => 13,
                        "mark" => 10
                    ],
                ]
            ],


            //group 2
            [
                "groupId" => Group::where("title", "تميز الأعداد ضمن العدد 20")->first()->_id,
                'text' => "ضع دائرة حول العدد الأكبر في كل مجموعة",
                "branchQuestion" => [
                    [
                        'typeQuestion' => 'اختر الإجابة',
                        'typeAnswer' => 'اختيار خيار واحد',
                        "answer" => 10,
                        "mark" => 25,
                        "options" => [4, 5, 6, 10, 2]
                    ],
                    [
                        'typeQuestion' => 'اختر الإجابة',
                        'typeAnswer' => 'اختيار خيار واحد',
                        "answer" => 20,
                        "mark" => 25,
                        "options" => [15, 19, 17, 11, 20]
                    ],
                ]
            ],
            [
                "groupId" => Group::where("title", "تميز الأعداد ضمن العدد 20")->first()->_id,
                'text' => "اختر الأعداد المتشابهة",
                "branchQuestion" => [
                    [
                        'typeQuestion' => 'اختر الإجابة',
                        'typeAnswer' => 'اختيار متعدد',
                        "answer" => [2, 2, 2, 2, 2, 2],
                        "mark" => 25,
                        "options" => [1, 8, 5, 2, 2, 2, 6, 2, 4, 7, 2, 3, 2]
                    ],
                    [
                        'typeQuestion' => 'اختر الإجابة',
                        'typeAnswer' => 'اختيار متعدد',
                        "answer" => [17, 17, 17, 17, 17],
                        "mark" => 25,
                        "options" => [17, 13, 11, 14, 17, 17, 19, 16, 12, 17, 20, 17, 15]
                    ],
                ]
            ],


            //Group 3
            [
                "groupId" => Group::where("title", "مقارنة الأعداد ضمن العدد 20")->first()->_id,
                'text' => "اختر العدد الاكبر",
                "branchQuestion" => [
                    [
                        'typeQuestion' => 'عرض أشكال',
                        'typeAnswer' => 'اختيار خيار واحد',
                        "answer" => 6,
                        "mark" => 20,
                        "options" => [5, 6]
                    ],
                    [
                        'typeQuestion' => 'عرض أشكال',
                        'typeAnswer' => 'اختيار متعدد',
                        "answer" => [7, 7],
                        "mark" => 20,
                        "options" => [7, 7]
                    ],
                    [
                        'typeQuestion' => 'عرض أشكال',
                        'typeAnswer' => 'اختيار خيار واحد',
                        "answer" => 9,
                        "mark" => 20,
                        "options" => [9, 8]
                    ],
                    [
                        'typeQuestion' => 'عرض أشكال',
                        'typeAnswer' => 'اختيار خيار واحد',
                        "answer" => 13,
                        "mark" => 20,
                        "options" => [13, 11]
                    ],
                    [
                        'typeQuestion' => 'عرض أشكال',
                        'typeAnswer' => 'اختيار متعدد',
                        "answer" => [10, 10],
                        "mark" => 20,
                        "options" => [10, 10]
                    ],
                ]
            ],

            //group 4
            [
                "groupId" => Group::where("title", "ترتيب الأعداد")->first()->_id,
                'text' => "أكمل الأعداد على خط الأعداد",
                "branchQuestion" => [
                    [
                        'typeQuestion' => 'عرض على مستقيم الأعداد',
                        'typeAnswer' => 'مصفوفة مرتبة',
                        "mark" => 20,
                        "lineOptions" => ["12", "x", "x", "15", "x", "x"],
                        "answer" => [12, 13, 14, 15, 16, 17],
                    ],
                    [
                        'typeQuestion' => 'عرض على مستقيم الأعداد',
                        'typeAnswer' => 'مصفوفة مرتبة',
                        "mark" => 20,
                        "lineOptions" => ["x", "5", "6", "x", "x", "x"],
                        "answer" => [4, 5, 6, 7, 8, 9],
                    ],
                ]
            ],
            [
                "groupId" => Group::where("title", "ترتيب الأعداد")->first()->_id,
                'text' => "رتب الأعداد التالية",
                "branchQuestion" => [
                    [
                        'typeQuestion' => 'عرض الخيارات',
                        'typeAnswer' => 'مصفوفة مرتبة',
                        "mark" => 20,
                        "options" => [44, 4, 14, 41],
                        "answer" => [4, 14, 41, 44],
                    ],
                    [
                        'typeQuestion' => 'عرض الخيارات',
                        'typeAnswer' => 'مصفوفة مرتبة',
                        "mark" => 20,
                        "options" => [60, 11, 23, 60, 19, 70,],
                        "answer" => [11, 19, 23, 30, 60, 70],
                    ],
                    [
                        'typeQuestion' => 'عرض الخيارات',
                        'typeAnswer' => 'مصفوفة مرتبة',
                        "mark" => 20,
                        "options" => [100, 4, 23, 57, 16, 37, 73, 96, 90, 83],
                        "answer" => [4, 16, 23, 37, 57, 73, 83, 90, 96, 100],
                    ],
                ]
            ],


            //Group 5
            [
                "groupId" => Group::where("title", "عد الأعداد")->first()->_id,
                'text' => "عد الأعداد التالية",
                "branchQuestion" => [
                    [
                        'typeQuestion' => 'عرض الأعداد',
                        'typeAnswer' => 'صوت',
                        "mark" => 100,
                        "options" => 30
                    ],
                ]
            ],

            //Group 6
            [
                "groupId" => Group::where("title", "جمع الاعداد")->first()->_id,
                'text' => "أجمع ما يلي",
                "branchQuestion" => [
                    [
                        'typeQuestion' => 'عملية جمع',
                        'typeAnswer' => 'إدخال رقم',
                        "mark" => 10,
                        "answer" => 9,
                        'options' => [4, 5]
                    ],
                    [
                        'typeQuestion' => 'عملية جمع',
                        'typeAnswer' => 'إدخال رقم',
                        "mark" => 10,
                        "answer" => 12,
                        'options' => [8, 4]
                    ],
                    [
                        'typeQuestion' => 'عملية جمع',
                        'typeAnswer' => 'إدخال رقم',
                        "mark" => 10,
                        "answer" => 11,
                        'options' => [2, 9]
                    ],
                    [
                        'typeQuestion' => 'عملية جمع',
                        'typeAnswer' => 'إدخال رقم',
                        "mark" => 10,
                        "answer" => 22,
                        'options' => [17, 5]
                    ],
                    [
                        'typeQuestion' => 'عملية جمع',
                        'typeAnswer' => 'إدخال رقم',
                        "mark" => 10,
                        "answer" => 7,
                        'options' => [7, 0]
                    ],
                    [
                        'typeQuestion' => 'عملية جمع',
                        'typeAnswer' => 'إدخال رقم',
                        "mark" => 10,
                        "answer" => 31,
                        'options' => [20, 11]
                    ],
                    [
                        'typeQuestion' => 'عملية جمع',
                        'typeAnswer' => 'إدخال رقم',
                        "mark" => 10,
                        "answer" => 100,
                        'options' => [70, 30]
                    ],
                    [
                        'typeQuestion' => 'عملية جمع',
                        'typeAnswer' => 'إدخال رقم',
                        "mark" => 10,
                        "answer" => 77,
                        'options' => [11, 66]
                    ],
                    [
                        'typeQuestion' => 'عملية جمع',
                        'typeAnswer' => 'إدخال رقم',
                        "mark" => 10,
                        "answer" => 65,
                        'options' => [20, 45]
                    ],
                    [
                        'typeQuestion' => 'عملية جمع',
                        'typeAnswer' => 'إدخال رقم',
                        "mark" => 10,
                        "answer" => 30,
                        'options' => [23, 7]
                    ],

                ]
            ],


            //Group 7
            [
                "groupId" => Group::where("title", "طرح الاعداد")->first()->_id,
                'text' => "اطرح ما يلي",
                "branchQuestion" => [
                    [
                        'typeQuestion' => 'عملية طرح',
                        'typeAnswer' => 'إدخال رقم',
                        "mark" => 10,
                        "answer" => 4,
                        'options' => [13, 9]
                    ],
                    [
                        'typeQuestion' => 'عملية طرح',
                        'typeAnswer' => 'إدخال رقم',
                        "mark" => 10,
                        "answer" => 12,
                        'options' => [44, 32]
                    ],
                    [
                        'typeQuestion' => 'عملية طرح',
                        'typeAnswer' => 'إدخال رقم',
                        "mark" => 10,
                        "answer" => 3,
                        'options' => [10, 7]
                    ],
                    [
                        'typeQuestion' => 'عملية طرح',
                        'typeAnswer' => 'إدخال رقم',
                        "mark" => 10,
                        "answer" => 0,
                        'options' => [7, 7]
                    ],
                    [
                        'typeQuestion' => 'عملية طرح',
                        'typeAnswer' => 'إدخال رقم',
                        "mark" => 10,
                        "answer" => 10,
                        'options' => [17, 7]
                    ],
                    [
                        'typeQuestion' => 'عملية طرح',
                        'typeAnswer' => 'إدخال رقم',
                        "mark" => 10,
                        "answer" => 3,
                        'options' => [20, 17]
                    ],
                    [
                        'typeQuestion' => 'عملية طرح',
                        'typeAnswer' => 'إدخال رقم',
                        "mark" => 10,
                        "answer" => 25,
                        'options' => [50, 25]
                    ],
                    [
                        'typeQuestion' => 'عملية طرح',
                        'typeAnswer' => 'إدخال رقم',
                        "mark" => 10,
                        "answer" => 11,
                        'options' => [30, 19]
                    ],
                    [
                        'typeQuestion' => 'عملية طرح',
                        'typeAnswer' => 'إدخال رقم',
                        "mark" => 10,
                        "answer" => 20,
                        'options' => [33, 13]
                    ],
                    [
                        'typeQuestion' => 'عملية طرح',
                        'typeAnswer' => 'إدخال رقم',
                        "mark" => 10,
                        "answer" => 6,
                        'options' => [6, 0]
                    ],
                ]
            ],

        ];

        foreach ($questions as $question) {
            $mainQuestion = Question::create([
                "groupId" => $question["groupId"],
                "text" => $question["text"],
            ]);
            foreach ($question["branchQuestion"] as $branchQuestion) {
                $branchQuestion["mainQuestionId"] = $mainQuestion->_id;
                Question::create($branchQuestion);
            }
        }
    }
}
