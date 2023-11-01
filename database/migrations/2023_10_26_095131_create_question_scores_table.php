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
        Schema::create('question_scores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('machine_result_id');
            $table->unsignedBigInteger('test_type_id');
            $table->unsignedBigInteger('question_id');
            $table->unsignedTinyInteger('score');

            $table->foreign('machine_result_id')->references('id')->on('machine_results');
            $table->foreign('test_type_id')->references('id')->on('test_types');
            $table->foreign('question_id')->references('id')->on('questions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_scores');
    }
};
