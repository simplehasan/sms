<?php

namespace Database\Seeders;

use App\Models\Cost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $costs = [
            [
                'id' => 1,
                'Code' => 'VISA',
                'Name' => 'Biaya pembuatan Visa',
                'Description' => 'Biaya yang digunakan untuk pembuatan VISA khusus PTB',
            ],
            [
                'id' => 2,
                'Code' => 'MECU',
                'Name' => 'Biaya Medical Checkup',
                'Description' => 'Biaya yang digunakan untuk medical check up sebagai syarat Visa khusus PTB',
            ],
            [
                'id' => 3,
                'Code' => 'ENGL',
                'Name' => 'Biaya Tes Bahasa Inggris',
                'Description' => 'Biaya yang digunakan untuk tes bahasa inggris mandiri khusus PTB',
            ],

        ];

        foreach ($costs as $cost) {
            Cost::updateOrCreate(['id' => $cost['id']], $cost);
        }
    }
}
