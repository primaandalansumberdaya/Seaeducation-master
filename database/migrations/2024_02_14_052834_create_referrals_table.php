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
        Schema::create('referals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('referalNumber');
            $table->string('logo');
            $table->string('file_contract');
            $table->string('about');
            $table->string('address');
            $table->string('email');
            $table->string('contact');
            $table->string('leader');
            $table->string('leader_contact');
            $table->string('pic');
            $table->string('pic_contact');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referals');
    }
};
