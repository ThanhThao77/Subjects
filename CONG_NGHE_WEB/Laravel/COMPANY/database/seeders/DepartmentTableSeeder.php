<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;
use Faker\Factory as Faker;
class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            Department::create([
                'name' => $faker->name,
                'location' => $faker->address(),
                'e_id' => $i,
            ]);
        }
    }
}
