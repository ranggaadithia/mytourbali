<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\Package::factory(5)->create();
        \App\Models\Destination::factory(15)->create();
        \App\Models\Photos::factory(30)->create();
    }
}
