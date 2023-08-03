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
        Schema::create('selections', function (Blueprint $table) {
            $table->id();
            $table->string('Nip')->unique();
            $table->boolean('Administrative')->nullable()->default(null);
            $table->boolean('English')->nullable()->default(null);
            $table->boolean('VisionAndWorkplan')->nullable()->default(null);
            $table->boolean('BODInterview')->nullable()->default(null);
            $table->boolean('ContractSign')->nullable()->default(null);
            $table->boolean('Failed')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('selections');
    }
};
