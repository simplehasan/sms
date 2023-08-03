<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'AreaCode',
        'Name',
        'LivingCost',
        'Settlement',
        'ThesisAllowance',
        'ResearchAllowance',
        'PublicationAllowance',
        'MovingAllowance',
        'StudentAllowance',
        'BookAllowance',
    ];
}
