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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('applicant_name');
            $table->string('father_name');
            $table->date('date_of_birth');
            $table->string('cnic', 15);
            $table->string('domicile');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('cell_no', 11);
            $table->string('residential_address');
            $table->string('permanent_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
