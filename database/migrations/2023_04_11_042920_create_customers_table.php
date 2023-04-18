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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('fristName');
            $table->string('lastName');
            $table->string('email');
            $table->integer('phone');
            $table->string('gender');
            $table->date('dob');
            $table->text('address');
            $table->string('houseType');
            $table->string('province');
            $table->string('city');
            $table->integer('postalCode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
