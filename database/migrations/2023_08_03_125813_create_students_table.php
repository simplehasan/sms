<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('Nip');
            $table->bigInteger('Whatsapp');
            $table->string('Jabatan');
            $table->string('UnitPelaksana');
            $table->string('UnitInduk');
            $table->string('TempatLahir');
            $table->string('TanggalLahir');
            $table->string('PendidikanTerakhir');
            $table->string('JurusanTerakhir');
            $table->string('UniversitasTerakhir');
            $table->string('NilaiIPK');
            $table->string('Program');              // PTB LN / PBJJ DN / PTB DN
            $table->string('OnMissionStudy');
            $table->boolean('BeasiswaLain')->nullable()->default(false);
            $table->string('NamaBeasiswa')->nullable();
            $table->string('StatusTalent')->nullable();
            $table->date('PeriodeSeleksi')->nullable();       // Talent A / B / C / D
            $table->string('UpdatedBy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
