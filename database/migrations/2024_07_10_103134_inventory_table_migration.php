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
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->string('s_no');
            $table->date('date');
            $table->string('dscp');
            $table->string('supp_name');
            // $table->string('dpt_name');
            $table->string('qty_in');
            // $table->string('qty_out')->nullable();
            // $table->string('balance')->nullable();
            $table->string('d_c');
            $table->string('weight_in');
            $table->string('packets_in');
            // $table->string('weight_out')->nullable();
            $table->string('no_cartons');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
