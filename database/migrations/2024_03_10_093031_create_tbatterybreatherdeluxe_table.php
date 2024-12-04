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
        Schema::create('tbtry_breather_dlx', function (Blueprint $table) {
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
            $table->string('extr_wshr');
            $table->string('vulcan_wshr');
            $table->string('fnl_ctng_wshr');
            $table->string('asmbl_wshr');
            $table->string('date_code_prnt');
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
        Schema::dropIfExists('tbtry_breather_dlx');
    }
};
