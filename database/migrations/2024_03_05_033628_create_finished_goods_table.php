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
        Schema::create('finished_goods', function (Blueprint $table) {
            $table->id();
            $table->string('finish_goods');
            $table->string('item_code');
            $table->string('client');
            $table->string('sc_item_code');
            $table->string('schedule');
            $table->string('total_supply');
            $table->string('balance');
            $table->string('in_process');
            $table->string('inventory');
            $table->string('bal_report');
            $table->string('store');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finished_goods');
    }
};
