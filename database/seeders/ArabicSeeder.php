<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Question;
use Illuminate\Database\Seeder;

class ArabicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                "groupId" => Group::where("title", "المعيار كتابة الحروف الهجائية كاملة بأشكالها المختلفة من الذاكرة البعيدة")->first()->_id,
                "text" => "قم بتوصيل الحرف إلى الكلمات الموجود فيها",
                "branchQuestion" => [
                    [
                        "word" => "م",
                        "options" => ["مـشعل", "عـمـر", "علـم", "أقالم", "نحـن", "فـرحة"],
                        "answer" => ["مـشعل", "عـمـر", "علـم", "أقالم"],
                        "typeQuestion" => "توصيل",
                        "typeAnswer" => "توصيل بشكل عشوائي",
                        "mark" => 10
                    ],
                    [
                        "word" => "ب",
                        "options" => ["بـلادي", "مكتـبـة", "كتـب", "حاسوب", "نـافـذة", "قفـص"],
                        "answer" => ["بـلادي", "مكتـبـة", "كتـب", "حاسوب"],
                        "typeQuestion" => "توصيل",
                        "typeAnswer" => "توصيل بشكل عشوائي",
                        "mark" => 10
                    ],
                    [
                        "word" => "د",
                        "options" => ["دفتر", "جريـدة", "أسـد", "ورد", "نـافـذة", "قفـص"],
                        "answer" => ["دفتر", "جريـدة", "أسـد", "ورد"],
                        "typeQuestion" => "توصيل",
                        "typeAnswer" => "توصيل بشكل عشوائي",
                        "mark" => 10
                    ],
                    [
                        "word" => "ت",
                        "options" => ["تـمر", "بيـتـنا", "لعبـت", "توت", "صـقر", "قفـص"],
                        "answer" => ["تـمر", "بيـتـنا", "لعبـت", "توت"],
                        "typeQuestion" => "توصيل",
                        "typeAnswer" => "توصيل بشكل عشوائي",
                        "mark" => 10
                    ],
                    [
                        "word" => "س",
                        "options" => ["سـور", "نـسـر", "تكنـس", "حارس", "صـقر", "بيـتـنا"],
                        "answer" => ["سـور", "نـسـر", "تكنـس", "حارس"],
                        "typeQuestion" => "توصيل",
                        "typeAnswer" => "توصيل بشكل عشوائي",
                        "mark" => 10
                    ],
                    [
                        "word" => "ح",
                        "options" => ["حـمل", "لـحـق", "مسبـح", "فرح", "صـقر", "بيـتـنا"],
                        "answer" => ["حـمل", "لـحـق", "مسبـح", "فرح"],
                        "typeQuestion" => "توصيل",
                        "typeAnswer" => "توصيل بشكل عشوائي",
                        "mark" => 10
                    ],
                    [
                        "word" => "ك",
                        "options" => ["كـرة", "يبـكـي", "أمسـك", "أعدك", "غـزال", "بيـتـنا"],
                        "answer" => ["كـرة", "يبـكـي", "أمسـك", "أعدك"],
                        "typeQuestion" => "توصيل",
                        "typeAnswer" => "توصيل بشكل عشوائي",
                        "mark" => 10
                    ],
                    [
                        "word" => "ع",
                        "options" => ["عـمر", "سـعـيد", "واسـع", "أسبوع", "غـزال", "بيـتـنا"],
                        "answer" => ["عـمر", "سـعـيد", "واسـع", "أسبوع"],
                        "typeQuestion" => "توصيل",
                        "typeAnswer" => "توصيل بشكل عشوائي",
                        "mark" => 10
                    ],
                    [
                        "word" => "ظ",
                        "options" => ["ظـالم", "مـظـلة", "يحافـظ", "محفوظ", "كـثـير", "بـخـور"],
                        "answer" => ["ظـالم", "مـظـلة", "يحافـظ", "محفوظ"],
                        "typeQuestion" => "توصيل",
                        "typeAnswer" => "توصيل بشكل عشوائي",
                        "mark" => 10
                    ],
                    [
                        "word" => "ي",
                        "options" => ["يـحب", "تـيـن", "كرسـي", "النادي", "هـواء", "بـخـور"],
                        "answer" => ["يـحب", "تـيـن", "كرسـي", "النادي"],
                        "typeQuestion" => "توصيل",
                        "typeAnswer" => "توصيل بشكل عشوائي",
                        "mark" => 10
                    ],
                ]
            ],//حرف
            [
                "groupId" => Group::where("title", "المعيار/تحليل الجمل إلى كلمات والكلمات إلى مقاطع والمقاطع إلى أصوات")->first()->_id,
                "text" => "قم بتحليل الجمل إلى كلمات ",
                "branchQuestion" => [
                    [
                        "sentence" => "ابتعد الخروف عن القطيع",
                        "options" => ["ابتعد", "الخروف", "عن", "القطيع", "شمس", "رماد"],
                        "answer" => ["ابتعد", "الخروف", "عن", "القطيع"],
                        "typeQuestion" => "تحليل",
                        "typeAnswer" => "مصفوفة مرتبة",
                        "mark" => 5
                    ],
                    [
                        "sentence" => "شاَهد الغراب الصغير نسرا",
                        "options" => ["شاَهد", "الغراب", "الصغير", "نسرا", "سم", "سمسم"],
                        "answer" => ["شاَهد", "الغراب", "الصغير", "نسرا"],
                        "typeQuestion" => "تحليل",
                        "typeAnswer" => "مصفوفة مرتبة",
                        "mark" => 5
                    ],
                    [
                        "sentence" => "زارت المعلمة أم أحلام",
                        "options" => ["زارت", "المعلمة", "أم", "أحلام", "حياة", "وردة"],
                        "answer" => ["زارت", "المعلمة", "أم", "أحلام"],
                        "typeQuestion" => "تحليل",
                        "typeAnswer" => "مصفوفة مرتبة",
                        "mark" => 5
                    ],
                ]
            ], //تحليل جمل
            [
                "groupId" => Group::where("title", "المعيار/تحليل الجمل إلى كلمات والكلمات إلى مقاطع والمقاطع إلى أصوات")->first()->_id,
                "text" => "أحلل الكلمات إلى مقاطع : ",
                "branchQuestion" => [
                    [
                        "sentence" => "َجِديَدة",
                        "options" => ["جِـ", "َديـ", "د", "ة", "ق", "ثق"],
                        "answer" => ["جِـ", "َديـ", "د", "ة"],
                        "typeQuestion" => "تحليل",
                        "typeAnswer" => "مصفوفة مرتبة",
                        "mark" => 5
                    ],
                    [
                        "sentence" => "مَتْجَرٌ",
                        "options" => ["مَتْـ", "جـ", "ٌَر", "لا", "سي"],
                        "answer" => ["مَتْـ", "جـ", "ٌَر"],
                        "typeQuestion" => "تحليل",
                        "typeAnswer" => "مصفوفة مرتبة",
                        "mark" => 5
                    ],
                    [
                        "sentence" => "صندوق",
                        "options" => ["صنـ", "دو", "ق", "رلا", "وز"],
                        "answer" => ["صنـ", "دو", "ق"],
                        "typeQuestion" => "تحليل",
                        "typeAnswer" => "مصفوفة مرتبة",
                        "mark" => 5
                    ],
                ]
            ],//تحليل كلمات
            [
                "groupId" => Group::where("title", "المعيار/تحليل الجمل إلى كلمات والكلمات إلى مقاطع والمقاطع إلى أصوات")->first()->_id,
                "text" => "أحلل المقاطع إلى أصوات : ",
                "branchQuestion" => [
                    [
                        "sentence" => "َيْلَـ",
                        "options" => ["يـْ", "لـَ", "لا", "ري"],
                        "answer" => ["يـْ", "لـَ"],
                        "typeQuestion" => "تحليل",
                        "typeAnswer" => "مصفوفة مرتبة",
                        "mark" => 5
                    ],
                    [
                        "sentence" => "هُو",
                        "options" => ["هـُ", "و", "سؤ", "ش"],
                        "answer" => ["هـُ", "و"],
                        "typeQuestion" => "تحليل",
                        "typeAnswer" => "مصفوفة مرتبة",
                        "mark" => 5
                    ],
                    [
                        "sentence" => "تِمْـ",
                        "options" => ["تـِ", "مـ", "ص", "في"],
                        "answer" => ["تـِ", "مـ"],
                        "typeQuestion" => "تحليل",
                        "typeAnswer" => "مصفوفة مرتبة",
                        "mark" => 5
                    ],
                    [
                        "sentence" => "غِيـ",
                        "options" => ["غـِ", "يـ", "لب", "لس"],
                        "answer" => ["غـِ", "يـ"],
                        "typeQuestion" => "تحليل",
                        "typeAnswer" => "مصفوفة مرتبة",
                        "mark" => 5
                    ],
                ]
            ],//تحليل المقاطع
            [
                "groupId" => Group::where("title", "المعيار/قراءة كلمات والنصوص")->first()->_id,
                "text" => "أقرأ الجمل التالية ",
                "branchQuestion" => [

                    [
                        "sentence" => " عَادَ عُمَرُ مِنَ الْمَدْرَسَةِ سَعِيداً.",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 30
                    ],
                    [
                        "sentence" => "  قَالَ عُمَرُ : الْيَوْمَ بَدَأَ أُسْبُوعُ الْمُرورِ .",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 30
                    ],
                    [
                        "sentence" => " أَقِفٌ عِنْدَ خَطِّ الْمُشَاةِ.",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 40
                    ],
                ],

            ],//قراءة
            [
                "groupId" => Group::where("title", "المعيار/كتابة جمل مكونة من كلمتين أو ثلث كلمات")->first()->_id,
                "text" => "أكتب الجمل أو الكلمات التالية مع التشكيل ",
                "branchQuestion" => [

                    [
                        "sentence" => "فَرِحَت الشَّجَرَة",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "العَسَلُ فِيه شَفَاء",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "الحَلِيب مُفِيذ",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "قَلَّدَ الغُرَابُ النَّسْر",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "َالحَياةُ جَميلةٌ",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 20
                    ],

                ]

            ],//كتابة جمل مكونة من كلمتين أو ثلث كلمات
            [
                "groupId" => Group::where("title", "قراءة كلمات مع الحركة الطويلة والقصيرة")->first()->_id,
                "text" => "أقرأ الكلمات التالية ",
                "branchQuestion" => [

                    [
                        "sentence" => "بَلَد",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "عَادِل",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "عَصِير",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "فُصُول",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "فًرِح",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 20
                    ],

                ],

            ],//قراءة كلمات مع الحركة الطويلة والقصيرة
            [
                "groupId" => Group::where("title", "قراءة كلمات فيها ظواهر لغوية ( ال الشمسية ، والقمرية ، والتضعيف)")->first()->_id,
                "text" => "أقرأ الكلمات التالية ",
                "branchQuestion" => [
                    [
                        "sentence" => "الْعِنَب",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "التَّمْر",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "نَظَّفَ",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "الْوَرَق",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "الشِّفَاء",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 20
                    ],


                ],

            ],//قراءة كلمات فيها ظواهر لغوية ( ال الشمسية ، والقمرية ، والتضعيف)
            [
                "groupId" => Group::where("title", "قراءة كلمات فيها ظواهر لغوية(التاء المربوطة ، والمفتوحة ، والهاء)")->first()->_id,
                "text" => "أقرأ الكلمات التالية ",
                "branchQuestion" => [
                    [
                        "sentence" => "مَكْتَبَة",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "مِيَاه",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "مِظَلَّةُ",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "جَلَسَت",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "وَجْه",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 20
                    ],

                ],

            ],//قراءة كلمات فيها ظواهر لغوية(التاء المربوطة ، والمفتوحة ، والهاء)
            [
                "groupId" => Group::where("title", "قراءة كلمات فيها ظواهر لغوية( تنوين الفتح ،والضم ،والكسر)")->first()->_id,
                "text" => "أقرأ الكلمات التالية ",
                "branchQuestion" => [
                    [
                        "sentence" => "طَلَالٌ",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "زُجَاجٍ",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "مُفِيداً",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "مَذْعُوراً",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "غَزَالٍ",
                        "typeQuestion" => "قراءة",
                        "typeAnswer" => "صوت",
                        "mark" => 20
                    ],

                ],

            ],//قراءة كلمات فيها ظواهر لغوية( تنوين الفتح ،والضم ،والكسر)
            [
                "groupId" => Group::where("title", "كتابة كلمات فيها ظواهر لغوية(التاء المربوطة ، والمفتوحة ، والهاء) من الذاكرة القريبة")->first()->_id,
                "text" => "أكتب الكلمات التالية مع التشكيل ",
                "branchQuestion" => [
                    [
                        "sentence" => "َرِحْلَة",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 5
                    ],
                    [
                        "sentence" => "زَيْت",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 5
                    ],
                    [
                        "sentence" => "أَخَذَه",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 5
                    ],
                    [
                        "sentence" => "بَارَكَت",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 5
                    ],
                    [
                        "sentence" => "صُورَة",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 5
                    ],
                ]

            ],//كتابة كلمات فيها ظواهر لغوية )التاء المربوطة ، والمفتوحة ، والهاء( من الذاكرة القريبة.
            [
                "groupId" => Group::where("title", "كتابة كلمات فيها ظواهر لغوية( ال الشمسية ، والقمرية ، والتضعيف)")->first()->_id,
                "text" => "أكتب الكلمات التالية مع التشكيل ",
                "branchQuestion" => [
                    [
                        "sentence" => "الشَّارِع",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "الْغُصْن",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "مُلَوَّث",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "الصَّبَاح",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "الشَّمْس",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 20
                    ],

                ]

            ],//كتابة كلمات فيها ظواهر لغوية ) ال الشمسية ، والقمرية ، والتضعيف(
            [
                "groupId" => Group::where("title", "كتابة كلمات فيها ظواهر لغوية(تنوين الفتح ،والضم ،والكسر)")->first()->_id,
                "text" => "أكتب الكلمات التالية مع التشكيل ",
                "branchQuestion" => [

                    [
                        "sentence" => "ماكرٌ",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 5
                    ],
                    [
                        "sentence" => "ماكرٌ",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 5
                    ],
                    [
                        "sentence" => "مُجْتَمِعَةً",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 5
                    ],
                    [
                        "sentence" => "صبرٍ",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 5
                    ],
                    [
                        "sentence" => "سلامٍ",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 5
                    ],
                ]

            ],//كتابة كلمات فيها ظواهر لغوية(تنوين الفتح ،والضم ،والكسر)
            [
                "groupId" => Group::where("title", "كتابة كلمات مع الحركة الطويلة والقصيرة")->first()->_id,
                "text" => "أكتب الكلمات التالية مع التشكيل ",
                "branchQuestion" => [

                    [
                        "sentence" => "كِتَّاب",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "نَدِم",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "مَطَر",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "بَدَأَ",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 20
                    ],
                    [
                        "sentence" => "حَضَر",
                        "typeQuestion" => "كتابي",
                        "typeAnswer" => "صورة",
                        "mark" => 20
                    ],
                ]

            ],//كتابة كلمات مع الحركة الطويلة والقصيرة












//            ["groupId" => Group::where("title", "معيار/ترتيب كلمات لبناء جملة مفيدة")->first()->_id,
//                "text" => "قم ترتيب الكلمات إلى جملة مفيدة",
//                "branchQuestion" => [
//                    [
//                        "words" => ["المكرمة", "في", "المسجد", "مكة", "الحرام,"],
//                        "answer" => "المسجد الحرام في مكة المكرمة",
//                        "typeQuestion" => "ترتيب",
//                        "typeAnswer" => "نص",
//                        "mark" => 10
//                    ],
//                    [
//                        "words" => ["البر", "الصدق", "إلى", "يهدي"],
//                        "answer" => "الصدق يهدي إلى البر",
//                        "typeQuestion" => "ترتيب",
//                        "typeAnswer" => "نص",
//                        "mark" => 10
//                    ],
//                    [
//                        "words" => ["عن", "الأذى", "الطريق", "صدقة", "إماطة"],
//                        "answer" => "إماطة الأذى عن الطريق صدقة",
//                        "typeQuestion" => "ترتيب",
//                        "typeAnswer" => "نص",
//                        "mark" => 10
//                    ],
//                    [
//                        "words" => ["عن", "غابت", "المدرسة", "وفاء"],
//                        "answer" => "غابت وفاء عن المدرسة",
//                        "typeQuestion" => "ترتيب",
//                        "typeAnswer" => "نص",
//                        "mark" => 10
//                    ],
//                    [
//                        "words" => ["الجد", "طاعة", "واجبة"],
//                        "answer" => "طاعة الجد واجبة",
//                        "typeQuestion" => "ترتيب",
//                        "typeAnswer" => "نص",
//                        "mark" => 10
//                    ],
//                ]
//            ],//ترتيب

//            [
//                "groupId" => Group::where("title", "المعيار اكتشاف دالالت الكلمات الجديدة من خلال الترادف والتضاد")->first()->_id,
//                "text" => "قم بتوصيل الكلمة إلى مرادفها",
//                "branchQuestion" => [
//                    [
//                        "word" => "المقدَسة",
//                        "options" => ["الواسعة", "المطهرة"],
//                        "answer" => "المطهرة",
//                        "typeQuestion" => "اختيار",
//                        "typeAnswer" => "نص",
//                        "mark" => 10
//                    ],
//                    [
//                        "word" => "ْقدَوة",
//                        "options" => ["ِمثال", "ُمَساَعَدة"],
//                        "answer" => "ِمثال",
//                        "typeQuestion" => "اختيار",
//                        "typeAnswer" => "نص",
//                        "mark" => 10
//                    ],
//                    [
//                        "word" => "ُ أْسِعف",
//                        "options" => ["ُ أَعاِلج", "أَسابق"],
//                        "answer" => "أَعاِلج",
//                        "typeQuestion" => "اختيار",
//                        "typeAnswer" => "نص",
//                        "mark" => 10
//                    ],
//                    [
//                        "word" => "ُيتزحزح",
//                        "options" => ["ُيثبت", "يتحرك"],
//                        "answer" => "يتحرك",
//                        "typeQuestion" => "اختيار",
//                        "typeAnswer" => "نص",
//                        "mark" => 10
//                    ],
//                    [
//                        "word" => "يبذرني",
//                        "options" => ["يزرعني", "يحصدني"],
//                        "answer" => "يزرعني",
//                        "typeQuestion" => "اختيار",
//                        "typeAnswer" => "نص",
//                        "mark" => 10
//                    ],
//                ]
//
//            ],//ترادف
//            [
//                "groupId" => Group::where("title", "المعيار اكتشاف دالالت الكلمات الجديدة من خلال الترادف والتضاد")->first()->_id,
//                "text" => "قم بتوصيل الكلمة إلى بضدها",
//                "branchQuestion" => [
//                    [
//                        "word" => "توفي",
//                        "options" => ["وُلِد", "كبر"],
//                        "answer" => "وُلِد",
//                        "typeQuestion" => "اختيار",
//                        "typeAnswer" => "نص",
//                        "mark" => 10
//                    ],
//                    [
//                        "word" => "َ يْنُمو",
//                        "options" => ["يَكْبر", "يتوقف"],
//                        "answer" => "يَكْبر",
//                        "typeQuestion" => "اختيار",
//                        "typeAnswer" => "نص",
//                        "mark" => 10
//                    ],
//                    [
//                        "word" => "َفكرةٌ رائعةٌ",
//                        "options" => ["فكرةٌ جيدةٌ", "فكرةٌ قبيحةٌ"],
//                        "answer" => "فكرةٌ قبيحةٌ",
//                        "typeQuestion" => "اختيار",
//                        "typeAnswer" => "نص",
//                        "mark" => 10
//                    ],
//                    [
//                        "word" => "َتتجول",
//                        "options" => ["تتمشى", "تتوقف"],
//                        "answer" => "تتوقف",
//                        "typeQuestion" => "اختيار",
//                        "typeAnswer" => "نص",
//                        "mark" => 10
//                    ],
//                    [
//                        "word" => "الحديثة",
//                        "options" => ["القديمة", "الجديدة"],
//                        "answer" => "القديمة",
//                        "typeQuestion" => "اختيار",
//                        "typeAnswer" => "نص",
//                        "mark" => 10
//                    ],
//                ]
//            ],//تضاد

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
