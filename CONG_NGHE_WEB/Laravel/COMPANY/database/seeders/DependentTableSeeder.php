<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dependent;
use Faker\Factory as Faker;
class DependentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i < 10; $i++){
            Dependent::create([
                'd_name' => $faker->name,
                'gender'=>$faker->randomElement(['male','female']),
                'relationship'=>$faker->sentence(1,true),
                'e_id' => $i,
            ]);
        }
    }
}
