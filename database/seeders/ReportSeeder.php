<?php

namespace Database\Seeders;

use App\Models\Report;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $reports = [
            [
                'id' => 1,
                'Code' => 'PUBL',
                'Name' => 'Publikasi Social Media',
                'Description' => 'Talent PTB PLN harus melakukan posting di sosial media bahwa yang bersangkutan telah menjadi salah satu awardee PTB PLN',
            ],
            [
                'id' => 2,
                'Code' => 'FOTO',
                'Name' => 'Foto talent di kampus',
                'Description' => 'Talent PTB PLN harus melakukan upload foto yang bersangkutan telah berada di kampus (terlihat bangunan/tulisan/logo kampus)',
            ],
            [
                'id' => 3,
                'Code' => 'STDK',
                'Name' => 'Studi Kasus',
                'Description' => 'Talent PTB PLN harus melakukan upload file studi kasus yang berkaitan dengan PLN setiap semesternya',
            ],

        ];

        foreach ($reports as $report) {
            Report::updateOrCreate(['id' => $report['id']], $report);
        }
    }
}
