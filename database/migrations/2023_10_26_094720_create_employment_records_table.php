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
        Schema::create('employment_records', function (Blueprint $table) {
            $table->bigIncrements('employment_record_id');
            $table->string('industry');
            $table->string('job_title');
            $table->unsignedBigInteger('applicant_id');
            $table->timestamps();

            $table->foreign('applicant_id')->references('applicant_id')->on('applicant');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employment_records');
    }
};
