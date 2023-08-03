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
        Schema::create('student_tests', function (Blueprint $table) {
            $table->id();
            $table->string('Nip')->unique();
            $table->string('TestCode');
            $table->float('OverallScore');
            $table->date('TestDate');
            $table->date('ExpiredDate');
            $table->string('CertNumber');
            $table->boolean('Expired')->nullable();
            $table->string('FileName');
            $table->boolean('Approved')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_tests');
    }
};
