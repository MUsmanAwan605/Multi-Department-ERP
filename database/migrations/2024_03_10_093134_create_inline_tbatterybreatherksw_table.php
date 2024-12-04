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
        Schema::create('inline_tbtry_breather_KSW', function (Blueprint $table) {
            $table->bigIncrements('sr_no');
            $table->string('date');
            $table->string('month');
            $table->string('day');
            $table->string('year');
            $table->string('extr_sngl_lyr');
            $table->string('semi_vulcan');
            $table->string('fnl_ctng_t');
            $table->string('cmplt_vulcan');
            $table->string('wshng_t');
            $table->string('punching');
            $table->string('mldng_grmt');
            $table->string('asmbl_grmt');
            $table->string('trmng_grmt');
            $table->string('prod');
            
            $table->integer('total')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inline_tbtry_breather_KSW');
    }
};
