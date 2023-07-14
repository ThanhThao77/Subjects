<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;
use Faker\Factory as Faker;
class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i < 50; $i++) {
            Task::create([
                'project_id'=>$i,
                'title' => $faker->sentence(2, true),
                'description' => $faker->sentence(2, true),
                'assigned_user_id'=>$i,
                'deadline'=>$faker->date,
                'status'=>$faker->sentence(1, true),
            ]);
        }
    }
}
