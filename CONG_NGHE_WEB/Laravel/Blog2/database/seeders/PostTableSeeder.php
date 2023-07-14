<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Post::create([
                //            "tên cột" => $faker-> ...
                "title" => $faker->sentence(2, true),
                "body" => $faker->text,
            ]);
        }
    }
}
