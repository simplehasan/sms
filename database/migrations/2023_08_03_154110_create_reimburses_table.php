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
        Schema::create('reimburses', function (Blueprint $table) {
            $table->id();
            $table->string('Nip');
            $table->string('Code');
            $table->date('InvoiceDate');
            $table->date('Deadline')->nullable()->default(null);
            $table->double('Value', 15);  //it is big decimal digits number
            $table->text('Info')->nullable()->default(null);
            $table->string('Status')->default('Progress');
            $table->string('InvoiceFileName')->nullable()->default(null);
            $table->string('PaymentFileName')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reimburses');
    }
};