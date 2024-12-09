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
        $this->call([AuthorSeeder::class, CategorySeeder::class, BookSeeder::class, AuthorBookSeeder::class]);

        User::factory()->create([
            'name' => 'عبدالرحمن الخطيب',
            'email' => 'khateeboveskey@gmail.com',
            'password' => Hash::make('123456789'),
            'is_admin' => 1
        ]);
    }
}
