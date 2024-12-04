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
        Schema::create('Employee', function (Blueprint $table) {
            $table->id();
            $table->string('fname','100');
            $table->string('fh_name','100');
            $table->string('h_no','100')->unique();
            $table->string('m_no','100')->unique();
            $table->string('dob','100');
            $table->string('email','100')->unique();
            $table->string('region','100');
            $table->string('cni_no','100')->unique();
            $table->string('adrs','100');
            $table->string('m_status','100');
            $table->string('emergency_no','100')->unique();
            $table->string('s_name','100');
            $table->string('l_adrs','100');
            $table->string('grade','100');
            $table->string('p_year','100');
            $table->string('c_name','100');
            $table->string('adrsss','100');
            $table->string('designations','100');
            $table->string('yoemloy','100');
            $table->string('e_name','100')->unique();
            $table->string('supervisor_name','100');
            $table->string('department','100');
            $table->string('doj','100');
            $table->string('designation','100');
            $table->string('cv','100');
            $table->string('cnic_copy','100');
            $table->string('photos','100');
            $table->string('status','100');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Employee');
    }
};
