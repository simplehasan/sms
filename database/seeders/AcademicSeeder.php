<?php

namespace Database\Seeders;

use App\Models\Academic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $academics = [
            [
                'id' => 1,
                'Nip' => '0000000ZY',
                'Loa' => true,
                'Degree' => 'Master',
                'University' => 'Monash University',
                'Major' => 'Master of Cybersecurity',
                'Rank' => 42,
                'Country' => 'Australia',
                'AreaCode' => 'AUAP',
                'Duration' => 4,
                'Start' => date_create("2024-02-26"),
                'End' => date_create("2025-12-31"),
                'Graduated' => false,
                'GraduateDate' => null,
                'UpdatedBy' => "0000000ZY",
            ],
            [
                'id' => 2,
                'Nip' => '0000010ZY',
                'Loa' => true,
                'Degree' => 'Master',
                'University' => 'Leeds University',
                'Major' => 'Master of Data Science',
                'Rank' => 75,
                'Country' => 'United Kingdom',
                'AreaCode' => 'EURO',
                'Duration' => 4,
                'Start' => date_create("2023-09-20"),
                'End' => date_create("2025-08-02"),
                'Graduated' => false,
                'GraduateDate' => null,
                'UpdatedBy' => "0000010ZY",
            ],
        ];

        foreach ($academics as $academic) {
            Academic::updateOrCreate(['id' => $academic['id']], $academic);
        }
    }
}
