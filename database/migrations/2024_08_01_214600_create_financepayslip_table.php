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
        Schema::create('financepayslip', function (Blueprint $table) {
            $table->id();
            $table->string('e_name');
            $table->string('e_id');
            $table->string('depart');
            $table->string('desig');
            $table->string('date');
            $table->string('b_salary');
            $table->string('allowances');
            $table->string('g_salary');
            $table->string('deduct');
            $table->string('n_salary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financepayslip');
    }
};
