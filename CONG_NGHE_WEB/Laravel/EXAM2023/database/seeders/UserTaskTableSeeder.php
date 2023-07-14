<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserTask;
use Faker\Factory as Faker;
class UserTaskTableSeeder extends Seeder
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
            UserTask::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'role' => $faker->randomElement(['admin','user']),
            ]);
        }
    }
}
