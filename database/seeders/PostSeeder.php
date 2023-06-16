<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::query()->each(function (Author $author) {
            Post::factory([
                'author_id' => $author->id,
                'image' => 'assets/' . rand(1, 10) . '.jpeg'
            ])->count(2)->create();
        });
    }
}
