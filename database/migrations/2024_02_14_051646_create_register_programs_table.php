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
        Schema::create('register_programs', function (Blueprint $table) {
            $table->id();
            $table->string('register_number');
            $table->string('student_number');
            $table->string('referral');
            $table->string('location');
            $table->string('price');
            $table->string('referal');
            $table->foreignId('user_id')->constrained('users')->references('id')->onDelete('cascade');
            $table->foreignId('program_id')->constrained('programs')->references('id')->onDelete('cascade');
            $table->string('status')->default('pending');
            $table->string('progress')->default('register');
            $table->boolean('is_ojt')->default(0);
            $table->string('hotel_name')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('position')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registerPrograms');
    }
};
