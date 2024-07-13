<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Tag;
use App\Models\User;
use App\Models\Question;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TagSeeder::class, 
            UserSeeder::class,
            AnswerSeeder::class
        ]);

        Question::factory(100)->recycle([
            User::all(),
            Tag::all()
        ])->create();

        Answer::factory(500)->create();
    }
}
