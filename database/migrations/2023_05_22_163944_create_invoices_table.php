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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->date('orer_date')->nullable();
            $table->enum('status', [0,1])->default(1)->comment('0 >> inactive ,1>>active');
            $table->enum('canceled', [0,1])->default(0)->comment('0 >> notCancel ,1>>cancel');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
