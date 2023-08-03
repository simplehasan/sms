<?php

namespace Database\Seeders;

use App\Models\Reimburse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReimburseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $reimburses = [
            [
                'id' => 1,
                'Nip' => '0000000ZY',
                'Code' => 'VISA',
                'InvoiceDate' => date_create('2023-07-14'),
                'Deadline' => null,
                'Value' => 6900000.356,
                'Info' => 'Pembayaran pendaftaran VISA melalui Agent Edlink',
                'Status' => 'Progress',
                'InvoiceFileName' => 'VISA-0000000ZY-14-07-2023-001',
                'PaymentFileName' => null,
            ],
            [
                'id' => 2,
                'Nip' => '0000002ZY',
                'Code' => 'MECU',
                'InvoiceDate' => date_create('2023-07-14'),
                'Deadline' => null,
                'Value' => 720000.445,
                'Info' => 'Pembayaran pendaftaran VISA melalui Agent Edlink',
                'Status' => 'Paid',
                'InvoiceFileName' => 'VISA-0000000ZY-14-07-2023-15-05-23',
                'PaymentFileName' => 'PAID-VISA-0000000ZY-20-07-2023-16-03-56',
            ],
        ];

        foreach ($reimburses as $reimburse) {
            Reimburse::updateOrCreate(['id' => $reimburse['id']], $reimburse);
        }
    }
}
