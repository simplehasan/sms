<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $areas = [
            [
                'id' => 1,
                'AreaCode' => 'AUAP',
                'Name' => 'Australia dan Asia Pasifik',
                'LivingCost' => '39000000',
                'Settlement' => '26000000',
                'ThesisAllowance' => '15600000',
                'ResearchAllowance' => '20000000',
                'PublicationAllowance' => '55000000',
                'MovingAllowance' => '16500000',
                'StudentAllowance' => '20000000',
                'BookAllowance' => '7800000',
            ],
        ];

        foreach ($areas as $area) {
            Area::updateOrCreate(['id' => $area['id']], $area);
        }
    }
}
