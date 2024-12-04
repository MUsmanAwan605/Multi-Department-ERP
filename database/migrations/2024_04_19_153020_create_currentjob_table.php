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
        Schema::create('currentjob', function (Blueprint $table) {
            $table->id();
            $table->string('e_id','100');
            $table->string('e_name','100')->unique();
            $table->string('supervisor_name','100');
            $table->string('department','100');
            $table->string('doj','100');
            $table->string('designation','100');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currentjob');
    }
};
