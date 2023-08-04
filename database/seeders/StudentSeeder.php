<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $students = [
            [
                'id' => 1,
                'Nip' => '0000000ZY',
                'Whatsapp' => 6285123456789,
                'Jabatan' => 'Officer Perencanaan dan Pengendalian Pemeliharaan',
                'UnitPelaksana' => 'Unit Pelaksana Pembangkitan Asam Asam',
                'UnitInduk' => 'PT PLN Indonesia Power',
                'TempatLahir' => 'Banjarbaru',
                'TanggalLahir' => date_create("1990-05-25"),
                'PendidikanTerakhir' => 'S1',
                'JurusanTerakhir' => 'Teknik Lingkungan',
                'UniversitasTerakhir' => 'Universitas Islam Kalimantan',
                'NilaiIPK' => 3.54,
                'Program' => 'PTB',
                'OnMissionStudy' => 'Master of Renewable Energy',
                'BeasiswaLain' => false,
                'NamaBeasiswa' => null,
                'StatusTalent' => 'D',
                'PeriodeSeleksi' => date_create("2023-05-15"),
                'UpdatedBy' => '0000001ZY',
            ],
            [
                'id' => 2,
                'Nip' => '0000002ZY',
                'Whatsapp' => 6285123456789,
                'Jabatan' => 'Officer K3',
                'UnitPelaksana' => 'Unit Pelaksana Pembangkitan Asam Asam',
                'UnitInduk' => 'PT PLN Indonesia Power',
                'TempatLahir' => 'Banjarmasin',
                'TanggalLahir' => date_create("1994-06-25"),
                'PendidikanTerakhir' => 'S1',
                'JurusanTerakhir' => 'Teknik Mesin',
                'UniversitasTerakhir' => 'Universitas Lambung Mangkurat',
                'NilaiIPK' => 3.32,
                'Program' => 'PTB',
                'OnMissionStudy' => 'Master of Sustainability',
                'BeasiswaLain' => true,
                'NamaBeasiswa' => 'LPDP',
                'StatusTalent' => 'A',
                'PeriodeSeleksi' => date_create("2023-05-15"),
                'UpdatedBy' => '0000001ZY',
            ],
        ];

        foreach ($students as $student) {
            Student::updateOrCreate(['id' => $student['id']], $student);
        }
    }
}
