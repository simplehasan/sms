<?php

namespace Database\Seeders;

use App\Models\Selection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SelectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $selections = [
            [
                'id' => 1,
                'Nip' => '0000000ZY',
                'Administrative' => true,
                'English' => true,
                'VisionAndWorkplan' => true,
                'BODInterview' => true,
                'ContractSign' => true,
                'Failed' => false,
            ],
            [
                'id' => 2,
                'Nip' => '0000002ZY',
                'Administrative' => true,
                'English' => true,
                'VisionAndWorkplan' => false,
                'BODInterview' => false,
                'ContractSign' => false,
                'Failed' => null,
            ],
            [
                'id' => 3,
                'Nip' => '0000003ZY',
                'Administrative' => false,
                'English' => null,
                'VisionAndWorkplan' => null,
                'BODInterview' => null,
                'ContractSign' => null,
                'Failed' => true,
            ],

        ];

        foreach ($selections as $selection) {
            Selection::updateOrCreate(['id' => $selection['id']], $selection);
        }
    }
}
