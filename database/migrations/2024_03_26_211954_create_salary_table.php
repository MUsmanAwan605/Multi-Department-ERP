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
        Schema::create('salary', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('sno');
            $table->string('name')  ;
            $table->string('department');
            $table->string('m_salary');
            $table->string('no_of_days');
            $table->string('no_of_late');
            $table->string('c_m_salary');
            $table->string('o_t_hr');
            $table->string('o_t_amt');
            $table->string('allowance');
            $table->string('t_s_c_m_bef_deduction');
            $table->string('m_l_deduction');
            $table->string('advan_deduction_amount');
            $table->string('net_pay_total_salary');
            $table->string('status')->default('Unpaid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salary');
    }
};
