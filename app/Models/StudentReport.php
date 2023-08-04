<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nip',
        'Code',
        'Keterangan',
        'UploadDate',
        'Link',
        'UploadFileName',
        'Status',
    ];
}
