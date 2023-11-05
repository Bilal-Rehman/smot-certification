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
        Schema::create('machine_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('machine_type_id');
            $table->integer('grade');
            $table->string('remarks')->nullable();
            $table->unsignedBigInteger('final_result_id');

            $table->foreign('machine_type_id')->references('id')->on('machine_types');
            $table->foreign('final_result_id')->references('id')->on('final_results');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machine_results');
    }
};
