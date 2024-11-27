<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            ['title' => 'ألف ليلة وليلة', 'author' => 'مجهول', 'year_published' => '800', 'description' => 'مجموعة من القصص والحكايات الشعبية التي تدور حول شهرزاد وشهريار'],
            ['title' => 'المقدمة', 'author' => 'ابن خلدون', 'year_published' => '1377', 'description' => 'كتاب في علم الاجتماع والتاريخ والسياسة يعد من أهم الكتب في التراث العربي'],
            ['title' => 'كليلة ودمنة', 'author' => 'ابن المقفع', 'year_published' => '750', 'description' => 'مجموعة من القصص على لسان الحيوانات تحمل حكماً وعبراً أخلاقية وسياسية'],
            ['title' => 'طوق الحمامة', 'author' => 'ابن حزم', 'year_published' => '1022', 'description' => 'كتاب يتحدث عن الحب وأنواعه وأسبابه وتجلياته في المجتمع الأندلسي'],
            ['title' => 'حي بن يقظان', 'author' => 'ابن طفيل', 'year_published' => '1169', 'description' => 'قصة فلسفية عن طفل ينشأ وحيداً في جزيرة ويكتشف الحقائق الكونية بعقله'],
            ['title' => 'الأيام', 'author' => 'طه حسين', 'year_published' => '1929', 'description' => 'سيرة ذاتية للكاتب تحكي قصة كفاحه منذ طفولته وفقدان بصره حتى نجاحه الأكاديمي'],
            ['title' => 'أولاد حارتنا', 'author' => 'نجيب محفوظ', 'year_published' => '1959', 'description' => 'رواية رمزية تتناول تاريخ البشرية من خلال حكاية حارة مصرية'],
            ['title' => 'موسم الهجرة إلى الشمال', 'author' => 'الطيب صالح', 'year_published' => '1966', 'description' => 'رواية تتناول صراع الحضارات بين الشرق والغرب من خلال قصة مصطفى سعيد'],
            ['title' => 'ثلاثية غرناطة', 'author' => 'رضوى عاشور', 'year_published' => '1994', 'description' => 'رواية تاريخية تتناول سقوط غرناطة ومصير المسلمين في الأندلس'],
            ['title' => 'عمارة يعقوبيان', 'author' => 'علاء الأسواني', 'year_published' => '2002', 'description' => 'رواية تصور الحياة الاجتماعية والسياسية في مصر من خلال سكان عمارة قديمة'],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
