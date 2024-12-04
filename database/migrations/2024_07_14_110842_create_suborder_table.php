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
        Schema::create('suborder', function (Blueprint $table) {
            $table->id();
            $table->string('s_no');
            $table->string('po_no');
            $table->date('date');
            $table->string('dscp');
            $table->string('d_c');
            $table->string('qty_in');
            $table->string('supplier');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suborder');
    }
};
