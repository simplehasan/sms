<?php

namespace Database\Seeders;

use App\Models\Test;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $tests = [
            [
                'id' => 1,
                'Code' => 'IEAC',
                'Name' => 'Tes Bahasa Inggris IELTS Academic',
                'MinimumScore' => 6.5,
            ],
            [
                'id' => 2,
                'Code' => 'IBT',
                'Name' => 'Tes Bahasa Inggris TOEFL IBT',
                'MinimumScore' => 80,
            ],
        ];

        foreach ($tests as $test) {
            Test::updateOrCreate(['id' => $test['id']], $test);
        }
    }
}
