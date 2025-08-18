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
        Schema::create('students', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->integer('age');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('address');
            $table->string('email')->unique();
            $table->date('birthdate');
            $table->enum('status', ['Active', 'Not Active'])->default('Active');
            $table->foreignId('doctor_id')->constrained()->onDelete('cascade');
            $table->foreignId('course_id')-> nullable()->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
