<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\UserSeeder;
use Database\Seeders\AreaSeeder;
use Database\Seeders\CostSeeder;
use Database\Seeders\TestSeeder;
use Database\Seeders\ReportSeeder;
use Database\Seeders\AcademicSeeder;
use Database\Seeders\StudentTestSeeder;
use Database\Seeders\SelectionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([

            UserSeeder::class,
            AreaSeeder::class,
            CostSeeder::class,
            TestSeeder::class,
            ReportSeeder::class,
            AcademicSeeder::class,
            StudentTestSeeder::class,
            SelectionSeeder::class,
        ]);
    }
}
