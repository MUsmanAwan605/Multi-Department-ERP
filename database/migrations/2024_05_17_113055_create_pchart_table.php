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
        Schema::create('pchart', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('part_no');
            $table->string('part_name');
            $table->string('descp');
            $table->integer('pin_hole');
            $table->integer('air_bbl');
            $table->integer('clr_out');
            $table->integer('taper_ctng');
            $table->integer('extr_bnd_agnt');
            $table->integer('rst_clp');
            $table->integer('ms_prnt');
            $table->string('notes');
            $table->integer('no_prblm_unt');
            $table->float('prblm_rate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pchart');
    }
};
