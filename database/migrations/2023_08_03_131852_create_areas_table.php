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
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('AreaCode');
            $table->string('Name');
            $table->bigInteger('LivingCost');
            $table->bigInteger('Settlement');
            $table->bigInteger('ThesisAllowance');
            $table->bigInteger('ResearchAllowance');
            $table->bigInteger('PublicationAllowance');
            $table->bigInteger('MovingAllowance');
            $table->bigInteger('StudentAllowance');
            $table->bigInteger('BookAllowance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('areas');
    }
};
