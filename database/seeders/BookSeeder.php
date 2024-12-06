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
            ['title' => 'ألف ليلة وليلة', 'year_published' => '800', 'description' => 'مجموعة من القصص والحكايات الشعبية التي تدور حول شهرزاد وشهريار', 'category_id' => 6],
            ['title' => 'المقدمة', 'year_published' => '1377', 'description' => 'كتاب في علم الاجتماع والتاريخ والسياسة يعد من أهم الكتب في التراث العربي', 'category_id' => 3],
            ['title' => 'كليلة ودمنة', 'year_published' => '750', 'description' => 'مجموعة من القصص على لسان الحيوانات تحمل حكماً وعبراً أخلاقية وسياسية', 'category_id' => 6],
            ['title' => 'طوق الحمامة', 'year_published' => '1022', 'description' => 'كتاب يتحدث عن الحب وأنواعه وأسبابه وتجلياته في المجتمع الأندلسي', 'category_id' => 6],
            ['title' => 'حي بن يقظان', 'year_published' => '1169', 'description' => 'قصة فلسفية عن طفل ينشأ وحيداً في جزيرة ويكتشف الحقائق الكونية بعقله', 'category_id' => 5],
            ['title' => 'الأيام', 'year_published' => '1929', 'description' => 'سيرة ذاتية للكاتب تحكي قصة كفاحه منذ طفولته وفقدان بصره حتى نجاحه الأكاديمي', 'category_id' => 7],
            ['title' => 'أولاد حارتنا', 'year_published' => '1959', 'description' => 'رواية رمزية تتناول تاريخ البشرية من خلال حكاية حارة مصرية', 'category_id' => 1],
            ['title' => 'موسم الهجرة إلى الشمال', 'year_published' => '1966', 'description' => 'رواية تتناول صراع الحضارات بين الشرق والغرب من خلال قصة مصطفى سعيد', 'category_id' => 1],
            ['title' => 'ثلاثية غرناطة', 'year_published' => '1994', 'description' => 'رواية تاريخية تتناول سقوط غرناطة ومصير المسلمين في الأندلس', 'category_id' => 1],
            ['title' => 'عمارة يعقوبيان', 'year_published' => '2002', 'description' => 'رواية تصور الحياة الاجتماعية والسياسية في مصر من خلال سكان عمارة قديمة', 'category_id' => 1],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
