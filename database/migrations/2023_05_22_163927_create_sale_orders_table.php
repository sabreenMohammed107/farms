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
        Schema::create('sale_orders', function (Blueprint $table) {
            $table->id();

            $table->string('code')->nullable();
            $table->date('so_date')->nullable();
            $table->text('description')->nullable();
            $table->enum('status', [0,1])->default(1)->comment('0 >> inactive ,1>>active');
            $table->unsignedBigInteger('invoice_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_orders');
    }
};
