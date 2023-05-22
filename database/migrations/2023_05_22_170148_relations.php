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
        Schema::table('items', function (Blueprint $table) {
            $table->foreign('unit_id')->references('id')->on('units');

        });
        Schema::table('customers', function (Blueprint $table) {
            $table->foreign('city_id')->references('id')->on('cities');

        });

        Schema::table('customer_items', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('item_id')->references('id')->on('items');

        });

        Schema::table('sale_orders', function (Blueprint $table) {
            $table->foreign('invoice_id')->references('id')->on('invoices');

        });

        Schema::table('sale_order_details', function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('sale_orders');
            $table->foreign('customer_item_id')->references('id')->on('customer_items');

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
