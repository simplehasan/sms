<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    protected $fillable = [
        'Nip',
        'Whatsapp',
        'Jabatan',
        'UnitPelaksana',
        'UnitInduk',
        'TempatLahir',
        'TanggalLahir',
        'PendidikanTerakhir',
        'JurusanTerakhir',
        'UniversitasTerakhir',
        'NilaiIPK',
        'OnMissionStudy',
        'BeasiswaLain',
        'NamaBeasiswa',
        'StatusTalent',
        'UpdatedBy'
    ];
}
