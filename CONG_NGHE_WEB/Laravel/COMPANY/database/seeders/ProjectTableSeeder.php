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
        for ($i = 1; $i < 10; $i++) {
            Project::create([
                'name' => $faker->name,
                'location' => $faker->sentence(1,true),
                'department_id' => $i,
                'e_id' => $i,
            ]);
        }
    }
}
