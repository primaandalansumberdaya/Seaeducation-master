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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->references('id')->onDelete('cascade');
            $table->string('title');
            $table->string('slug');
            $table->longText('description')->nullable();
            $table->string('type')->nullable();
            $table->string('duration');
            $table->string('price');
            $table
                ->boolean('status')
                ->default(true);
            $table->date('registerDate')->nullable();
            $table->date('programStart')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('programs')) {
            Schema::dropIfExists('programs');
        }
    }
};
