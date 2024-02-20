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
        Schema::create('program_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('register_id')->constrained('register_programs')->references('id')->onDelete('cascade');
            $table->string('external_id');
            $table->string('email');
            $table->string('payment_url')->nullable();
            $table->string('status')->default('pending');
            $table->json('metadata')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programPayments');
    }
};
