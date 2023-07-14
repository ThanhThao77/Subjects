<?php

namespace Database\Seeders;

use App\Models\Journal;
use Illuminate\Database\Seeder;
use Database\Factories\JournalFactory;

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
        Journal::factory(10)->create();
    }
}
