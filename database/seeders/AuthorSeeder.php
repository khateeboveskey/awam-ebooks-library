<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            ['name' => 'مجهول', 'bio' => 'مؤلف أسطوري لقصص عربية تعكس حكمة الشعوب القديمة وعقلية العصور السحيقة.'],
            ['name' => 'ابن خلدون', 'bio' => 'عالم اجتماع وفيلسوف عربي بارز، كتب عن تاريخ الحضارات وتأثير العوامل الاجتماعية على سير التاريخ.'],
            ['name' => 'ابن المقفع', 'bio' => 'كاتب وفيلسوف عربي قديم، اشتهر بتأليف قصص تحمل رسائل أخلاقية وفلسفية عميقة.'],
            ['name' => 'ابن حزم', 'bio' => 'فيلسوف ومفكر إسلامي، كتب عن الحب والفلسفة وتأثيرهما على الفرد والمجتمع.'],
            ['name' => 'ابن طفيل', 'bio' => 'كاتب وفيلسوف عربي، صاحب رواية "حي بن يقظان" التي تعالج قضايا العقلانية والفلسفية.'],
            ['name' => 'طه حسين', 'bio' => 'أديب وناقد أدبي مصري، قادر على تقديم تحليلات نقدية عميقة للأدب العربي الكلاسيكي والمعاصر.'],
            ['name' => 'نجيب محفوظ', 'bio' => 'روائي مصري حاز على جائزة نوبل، كتب روايات تعكس حياة المجتمع المصري بأسلوب فريد ورائع.'],
            ['name' => 'الطيب صالح', 'bio' => 'كاتب سوداني شهير، تتميز رواياته بتصويرها للصراعات الثقافية والاجتماعية في الوطن العربي.'],
            ['name' => 'رضوى عاشور', 'bio' => 'كاتبة مصرية، اشتهرت بروايتها "ثلاثية غرناطة" التي تحكي قصة سقوط غرناطة بأسلوب تاريخي رائع.'],
            ['name' => 'علاء الأسواني', 'bio' => 'روائي مصري يعكس واقع المجتمع المصري بكل تعقيداته وتنوعاته من خلال أعماله الأدبية.'],
        ];

        foreach ($authors as $author) {
            Author::create([
                'name' => $author['name'],
                'bio' => $author['bio'],
            ]);
        }
    }
}
