<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentTest extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nip',
        'TestCode',
        'OverallScore',
        'TestDate',
        'ExpiredDate',
        'CertNumber',
        'Expired',
        'FileName',
    ];
}
