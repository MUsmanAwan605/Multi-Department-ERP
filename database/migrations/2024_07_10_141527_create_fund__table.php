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
        Schema::create('fund', function (Blueprint $table) {
            $table->id();
            $table->string('fund');
            $table->string('name')->nullable();
            $table->string('dpt')->nullable();
            $table->string('date');
            $table->string('amount');
            $table->string('p_method')->nullable();
            $table->string('debit')->nullable();
            // $table->string('descp');
            $table->string('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fund');
    }
};
