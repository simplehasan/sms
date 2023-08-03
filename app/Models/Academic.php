<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nip',
        'Loa',
        'Degree',
        'University',
        'Major',
        'Rank',
        'Country',
        'AreaCode',
        'Duration',
        'Start',
        'End',
        'Graduated',
        'GraduateDate',
        'UpdatedBy',
    ];
}
