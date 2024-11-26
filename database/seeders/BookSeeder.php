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
            ['title' => 'ألف ليلة وليلة', 'author' => 'مجهول', 'year_published' => '800'],
            ['title' => 'المقدمة', 'author' => 'ابن خلدون', 'year_published' => '1377'],
            ['title' => 'كليلة ودمنة', 'author' => 'ابن المقفع', 'year_published' => '750'],
            ['title' => 'طوق الحمامة', 'author' => 'ابن حزم', 'year_published' => '1022'],
            ['title' => 'حي بن يقظان', 'author' => 'ابن طفيل', 'year_published' => '1169'],
            ['title' => 'الأيام', 'author' => 'طه حسين', 'year_published' => '1929'],
            ['title' => 'أولاد حارتنا', 'author' => 'نجيب محفوظ', 'year_published' => '1959'],
            ['title' => 'موسم الهجرة إلى الشمال', 'author' => 'الطيب صالح', 'year_published' => '1966'],
            ['title' => 'ثلاثية غرناطة', 'author' => 'رضوى عاشور', 'year_published' => '1994'],
            ['title' => 'عمارة يعقوبيان', 'author' => 'علاء الأسواني', 'year_published' => '2002'],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
