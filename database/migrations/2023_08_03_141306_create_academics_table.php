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
        Schema::create('academics', function (Blueprint $table) {
            $table->id();
            $table->string('Nip')->unique();
            $table->boolean('Loa');
            $table->string('Degree');
            $table->string('University');
            $table->string('Major');
            $table->integer('Rank');
            $table->string('Country');
            $table->string('AreaCode')->nullable();
            $table->integer('Duration');
            $table->date('Start');
            $table->date('End');
            $table->boolean('Graduated');
            $table->date('GraduateDate')->nullable();
            $table->string('UpdatedBy')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academics');
    }
};
