<?php

namespace Database\Seeders;

use App\Models\StudentTest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentTestSeeder extends Seeder
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
                'Nip' => '0000000ZY',
                'TestCode' => 'IEAC',
                'OverallScore' => 6.5,
                'TestDate' => date_create("2023-06-15"),
                'ExpiredDate' => date_create("2025-06-15"),
                'CertNumber' => '123-ID-1230123',
                'Expired' => false,
                'FileName' => 'IEAC-2023-04-05-0000000ZY-13-45-13',
            ],
            [
                'id' => 2,
                'Nip' => '0000001ZY',
                'TestCode' => 'IBT',
                'OverallScore' => 90,
                'TestDate' => date_create("2023-06-05"),
                'ExpiredDate' => date_create("2025-06-05"),
                'CertNumber' => 'I9230DD12QA',
                'Expired' => false,
                'FileName' => 'IBT-2023-04-05-0000000ZY-13-47-54',
            ],
        ];


        foreach ($tests as $test) {
            StudentTest::updateOrCreate(['id' => $test['id']], $test);
        }
    }
}
