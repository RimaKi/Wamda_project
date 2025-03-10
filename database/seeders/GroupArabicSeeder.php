<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupArabicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups=[
            [
                "title"=>"المعيار/قراءة كلمات والنصوص",
                "minimumMark"=>80,
                "subject"=>"لغتي",

            ],
            [
                "title"=>"المعيار كتابة الحروف الهجائية كاملة بأشكالها المختلفة من الذاكرة البعيدة",
                "minimumMark"=>100,
                "subject"=>"لغتي",

            ],
            [
                "title"=>"المعيار/تحليل الجمل إلى كلمات والكلمات إلى مقاطع والمقاطع إلى أصوات",
                "minimumMark"=>80,
                "subject"=>"لغتي",

            ],
            [
                "title"=>"قراءة كلمات مع الحركة الطويلة والقصيرة",
                "minimumMark"=>80,
                "subject"=>"لغتي",

            ],
            [
                "title"=>"قراءة كلمات فيها ظواهر لغوية ( ال الشمسية ، والقمرية ، والتضعيف)",
                "minimumMark"=>80,
                "subject"=>"لغتي",

            ],  [
                "title"=>"قراءة كلمات فيها ظواهر لغوية(التاء المربوطة ، والمفتوحة ، والهاء)",
                "minimumMark"=>80,
                "subject"=>"لغتي",

            ], [
                "title"=>"قراءة كلمات فيها ظواهر لغوية( تنوين الفتح ،والضم ،والكسر)",
                "minimumMark"=>80,
                "subject"=>"لغتي",

            ],
            [
                "title"=>"المعيار/كتابة جمل مكونة من كلمتين أو ثلث كلمات",
                "minimumMark"=>80,
                "subject"=>"لغتي",

            ],
            [
                "title"=>"كتابة كلمات فيها ظواهر لغوية(التاء المربوطة ، والمفتوحة ، والهاء) من الذاكرة القريبة",
                "minimumMark"=>80,
                "subject"=>"لغتي",

            ],
            [
                "title"=>"كتابة كلمات فيها ظواهر لغوية( ال الشمسية ، والقمرية ، والتضعيف)",
                "minimumMark"=>80,
                "subject"=>"لغتي",

            ],
            [
                "title"=>"كتابة كلمات فيها ظواهر لغوية(تنوين الفتح ،والضم ،والكسر)",
                "minimumMark"=>80,
                "subject"=>"لغتي",

            ],  [
                "title"=>"كتابة كلمات مع الحركة الطويلة والقصيرة",
                "minimumMark"=>80,
                "subject"=>"لغتي",

            ],

        ];
        foreach ($groups as $group){
            Group::create($group);
        }
    }
}
