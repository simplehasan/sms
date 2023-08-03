<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reimburse extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nip',
        'Code',
        'InvoiceDate',
        'Deadline',
        'Value',
        'Info',
        'Status',
        'InvoiceFileName',
        'PaymentFileName',
    ];
}
