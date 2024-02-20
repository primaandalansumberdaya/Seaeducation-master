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
        Schema::create('experience_user', function (Blueprint $table) {
            $table->id();
            $table->string('companyName');
            $table->string('base')->nullable();
            $table
                ->foreignId('detail_user_id')
                ->references('id')
                ->on('detail_users')
                ->onDelete('cascade');
            $table->string('position')->nullable();
            $table->string('jobTitle')->nullable();
            $table->date('startDate')->nullable();
            $table->date('endDate')->nullable();
            $table->longText('address')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('zipCode')->nullable();
            $table->string('country')->nullable();
            $table->string('spvName')->nullable();
            $table->string('companyPhone')->nullable();
            $table->string('jobDescriptions')->nullable();
            $table->string('certificate')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experienceUser');
    }
};
