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
        Schema::create('applicant', function (Blueprint $table) {
            $table->id();
            $table->string('applicantName', 40);
            $table->string('fatherName', 40);
            $table->date('dateofBirth');
            $table->string('cnic', 115);
            $table->string('domicile', 15);
            $table->string('gender', 10);
            $table->string('cellNumber', 15);
            $table->string('residentialAddress', 200);
            $table->string('permanentAddress', 200);
            $table->string('industry', 40)->nullable();
            $table->string('jobTitle', 40)->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant');
    }
};
