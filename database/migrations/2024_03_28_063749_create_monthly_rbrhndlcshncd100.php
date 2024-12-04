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
        Schema::create('monthly_rbrhndlcshncd100', function (Blueprint $table) {
            $table->bigIncrements('sr_no');
            $table->string('date');
            $table->string('month');
            $table->string('year');
            $table->string('opr_name');
            $table->string('inprcs_rjct');
            $table->string('fnl_rjct');
            $table->string('prod_qty');
            $table->string('inspct_qty');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monthly_rbrhndlcshncd100');
    }
};
