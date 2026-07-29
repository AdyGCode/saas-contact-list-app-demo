<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            // CategorySeeder::class,
            // ContactSeeder::class,

            // This is for demo purposes only
            DemoOrderSeeder::class,
            DemoIconSeeder::class,
        ]);
    }
}
