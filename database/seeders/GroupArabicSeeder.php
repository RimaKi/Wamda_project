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
              "name"=>"المعيار/قراءة كلمات والنصوص",
              "minimumMark"=>80,
              "subject"=>"لغتي",

          ],
            [
                "name"=>"المعيار كتابة الحروف الهجائية كاملة بأشكالها المختلفة من الذاكرة البعيدة",
                "minimumMark"=>100,
                "subject"=>"لغتي",

            ],[
                "name"=>"المعيار/تحليل الجمل إلى كلمات والكلمات إلى مقاطع والمقاطع إلى أصوات",
                "minimumMark"=>80,
                "subject"=>"لغتي",

            ],
            [
                "name"=>"المعيار اكتشاف دالالت الكلمات الجديدة من خلال الترادف والتضاد",
                "minimumMark"=>80,
                "subject"=>"لغتي",
                "type"=>"الترادف والتضاد"
            ],  [
                "name"=>"معيار/ترتيب كلمات لبناء جملة مفيدة",
                "minimumMark"=>80,
                "subject"=>"لغتي",

            ],[
                "name"=>"المعيار/كتابة جمل مكونة من كلمتين أو ثلث كلمات",
                "minimumMark"=>80,
                "subject"=>"لغتي",

            ],

        ];
        foreach ($groups as $group){
            Group::create($group);
        }
    }
}
