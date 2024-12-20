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
        Schema::create('store_order', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('title');
            $table->string('qty');
            $table->string('dpt');
            $table->string('status')->default('Process');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store_order');
    }
};
