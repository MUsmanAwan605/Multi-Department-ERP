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
        Schema::create('capability', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->integer('part_no');
            $table->string('part_name');
            $table->string('process_name');
            $table->string('msrng_ins');
            $table->string('event');
            $table->string('inspector');
            $table->string('inspct_rslt');
            $table->string('incharge');
            $table->string('manager');
            $table->string('head');
            $table->float('inspct_data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capability');
    }
};
