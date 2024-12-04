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
        Schema::create('stationery_orders', function (Blueprint $table) {
            $table->id();
            $table->string('s_no');
            $table->string('po_no');
            $table->date('date');
            $table->string('dscp_goods');
            $table->string('dc_chalan');
            $table->string('qty_in');
            $table->string('order_by');
            $table->string('supplier');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stationery_orders');
    }
};
