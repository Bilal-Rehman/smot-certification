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
        Schema::create('user_response', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('applicantId');
            $table->unsignedBigInteger('phaseId');
            $table->unsignedBigInteger('activityId');
            $table->unsignedBigInteger('descriptionId');
            $table->integer('point');

            $table->foreign('applicantId')
            ->references('id')
            ->on('applicant')
            ->onDelete('cascade');

            $table->foreign('phaseId')
            ->references('id')
            ->on('phase')
            ->onDelete('cascade');

            $table->foreign('activityId')
            ->references('id')
            ->on('activity')
            ->onDelete('cascade');

            $table->foreign('descriptionId')
            ->references('id')
            ->on('description')
            ->onDelete('cascade');

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_response');
    }
};
