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
        Schema::create('tfuel_CG125', function (Blueprint $table) {
            $table->bigIncrements('sr_no');
            $table->string('date');
            $table->string('month');
            $table->string('day');
            $table->string('year');
            $table->string('extr_btm_lyr');
            $table->string('extr_top_lyr');
            $table->string('blnk_ctng_tlyr');
            $table->string('vulcan_tlyr');
            $table->string('washing');
            $table->string('fnl_ctng_tlyr');
            $table->string('extr_vtube');
            $table->string('vulcan_vtube');
            $table->string('fnl_ctng_vtube');
            $table->string('vtube_asmbl');
            $table->string('date_code_prnt');
            $table->string('clip_asmbl');
            $table->string('tube_prod');
            
            $table->integer('total')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tfuel_CG125');
    }
};
