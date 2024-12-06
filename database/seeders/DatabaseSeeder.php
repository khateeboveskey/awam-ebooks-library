<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([AuthorSeeder::class, BookSeeder::class, AuthorBookSeeder::class, CategorySeeder::class]);

        User::factory()->create([
            'name' => 'عبدالرحمن الخطيب',
            'email' => 'khateeboveskey@gmail.com',
            'password' => Hash::make('Khateeb*404'),
        ]);
    }
}
