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
        Schema::create('detail_users', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table
                ->foreignId('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->string('birthPlace')->nullable();
            $table->date('birthDate')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital')->nullable();
            $table->string('aboutMe')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('phoneNumber2')->nullable();
            $table->longText('address')->nullable();
            $table->string('regency')->nullable();
            $table->string('province')->nullable();
            $table->string('zipCode')->nullable();
            $table->string('country')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailUser');
    }
};
