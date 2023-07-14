<?php

namespace Database\Seeders;
use App\Models\Category;
use Database\Factories\CategoryFactory;

use App\Models\Author;
use Database\Factories\AuthorFactory;

use App\Models\Post;
use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Category::factory(10)->create();
        Author::factory(10)->create();
        Post::factory(10)->create();
    }
}
