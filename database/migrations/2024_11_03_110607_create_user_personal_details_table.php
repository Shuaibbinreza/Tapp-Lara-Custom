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
        Schema::create('user_personal_details', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key referencing users table
            $table->string('firstnameInput');
            $table->string('lastnameInput');
            $table->string('phonenumberInput');
            $table->string('emailInput');
            $table->date('JoiningdatInput');
            $table->json('skillsInput'); // Store multiple skills as a JSON array
            $table->string('designationInput');
            $table->string('websiteInput1');
            $table->string('cityInput');
            $table->string('countryInput');
            $table->string('zipcodeInput');
            $table->text('description'); // Updated column name
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_personal_details');
    }
};
