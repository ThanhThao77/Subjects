<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Factory as Faker;
class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            Project::create([
                'title' => $faker->sentence(2, true),
                'description' => $faker->sentence(2, true),
            ]);
        }
    }
}
