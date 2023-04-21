<?php

namespace Database\Seeders;

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
        $this->call(AuthorSeeder::class);
        $this->call(WordSeeder::class);
        $this->call(DefinitionSeeder::class);
        $this->call(DefinitionExampleSeeder::class);
    }
}
