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
        Schema::create('student_reports', function (Blueprint $table) {
            $table->id();
            $table->string('Nip');
            $table->string('Code');
            $table->text('Keterangan')->nullable();
            $table->date('UploadDate');
            $table->string('Link')->nullable();
            $table->string('UploadFileName')->nullable();
            $table->string('Status')->default('Review');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_reports');
    }
};
