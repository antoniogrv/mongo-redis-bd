<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::query()->each(function (Post $post) {
            Comment::factory([
                'author_id' => Author::all()->random()->first()->id,
                'post_id' => $post->id,
            ])->count(5)->create();
        });
    }
}
