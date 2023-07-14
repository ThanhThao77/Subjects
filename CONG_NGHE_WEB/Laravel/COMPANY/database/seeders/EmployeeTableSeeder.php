<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use Faker\Factory as Faker;
class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $doj = now();
        for($i = 0; $i <10; $i++){
            Employee::create([
                'name' => $faker->name,
                'gender'=>$faker->randomElement(['male','female']),
                'address'=>$faker->address,
                'dob' => $faker->date(),
                'doj'=>$faker->$doj()
            ]);
        }
    }
}
