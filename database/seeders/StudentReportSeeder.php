<?php

namespace Database\Seeders;

use App\Models\StudentReport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentReportSeeder extends Seeder
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
                'Nip' => '0000000ZY',
                'Code' => 'SCMD',
                'Keterangan' => 'Postingan Social Media',
                'UploadDate' => date_create("2023-07-03"),
                'Link' => "https://linkedin.com/in/abdullahibnuhasan",
                'UploadFileName' => null,
                'Status' => 'Approved',
            ],
            [
                'id' => 2,
                'Nip' => '0000002ZY',
                'Code' => 'STDK',
                'Keterangan' => 'Studi Kasus Semester 2',
                'UploadDate' => date_create("2023-07-03"),
                'Link' => null,
                'UploadFileName' => "STDK-0000002ZY-03-07-2023-16-55-23",
                'Status' => 'Approved',
            ],
            [
                'id' => 3,
                'Nip' => '0000000ZY',
                'Code' => 'STDK',
                'Keterangan' => 'Studi Kasus Semester 2',
                'UploadDate' => date_create("2023-08-03"),
                'Link' => null,
                'UploadFileName' => "STDK-0000000ZY-03-08-2023-08-23-44",
                'Status' => 'Review',
            ],
            [
                'id' => 4,
                'Nip' => '0000003ZY',
                'Code' => 'FOTO',
                'Keterangan' => null,
                'UploadDate' => date_create("2023-05-03"),
                'Link' => null,
                'UploadFileName' => "FOTO-0000000ZY-03-05-2023-09-13-14",
                'Status' => 'Approved',
            ],


        ];

        foreach ($reports as $report) {
            StudentReport::updateOrCreate(['id' => $report['id']], $report);
        }
    }
}
