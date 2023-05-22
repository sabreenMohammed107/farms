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
             $table->string('code')->nullable();
            $table->string('name')->nullable();

            $table->string('address')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();

            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('emp1')->nullable();
            $table->string('mobile1')->nullable();
            $table->string('email1')->nullable();
            $table->string('emp2')->nullable();
            $table->string('mobile2')->nullable();
            $table->string('email2')->nullable();
            $table->enum('status', [0,1])->default(1)->comment('0 >> inactive ,1>>active');

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
