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
        Schema::create('languageUser', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('detail_user_id')
                ->references('id')
                ->on('detailUsers')
                ->onDelete('cascade');
            $table->string('name');
            $table->string('level');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('languageUser');
    }
};
