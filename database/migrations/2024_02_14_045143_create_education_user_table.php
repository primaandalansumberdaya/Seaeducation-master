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
        Schema::create('educationUser', function (Blueprint $table) {
            $table->id();
            $table->string('schoolName')->nullable();
            $table->string('slug')->nullable();
            $table
                ->foreignId('detail_user_id')
                ->references('id')
                ->on('detailUsers')
                ->onDelete('cascade');
            $table->string('course')->nullable();
            $table->string('degree')->nullable();
            $table->date('startDate')->nullable();
            $table->date('graduateDate')->nullable();
            $table->longText('address')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('country')->nullable();
            $table->string('zipCode')->nullable();
            $table->string('certificate')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educationUser');
    }
};
