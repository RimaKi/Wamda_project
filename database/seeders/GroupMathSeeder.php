<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupMathSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups = [
            [
                'subject' => 'رياضيات',
                'title' => "قراءة و كتابة الأعداد ضمن العدد 20",
                'minimumMark' => 100
            ],
            [
                'subject' => 'رياضيات',
                'title' => "تميز الأعداد ضمن العدد 20",
                'minimumMark' => 100
            ],
            [
                'subject' => 'رياضيات',
                'title' => "مقارنة الأعداد ضمن العدد 20",
                'minimumMark' => 80
            ],
            [
                'subject' => 'رياضيات',
                'title' => "ترتيب الأعداد",
                'minimumMark' => 80
            ],

            [
                'subject' => 'رياضيات',
                'title' => "عد الأعداد",
                'minimumMark' => 100
            ],
            [
                'subject' => 'رياضيات',
                'title' => "جمع الاعداد",
                'minimumMark' => 80
            ],
            [
                'subject' => 'رياضيات',
                'title' => "طرح الاعداد",
                'minimumMark' => 80
            ],

        ];
        foreach ($groups as $group){
            Group::create($group);
        }
    }
}
