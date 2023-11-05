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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            // // new fields
            // $table->string('father_name')->nullable();
            // $table->date('date_of_birth')->nullable();
            // $table->string('cnic', 15)->nullable();
            // $table->string('domicile')->nullable();
            // $table->enum('gender', ['male', 'female', 'other'])->nullable();
            // $table->string('cell_no', 11)->nullable();
            // $table->string('residential_address')->nullable();
            // $table->string('permanent_address')->nullable();
            // // end of new fields

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
