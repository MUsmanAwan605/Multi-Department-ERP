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
        Schema::create('stationery_issued', function (Blueprint $table) {
            $table->id();
            $table->string('s_no');
            $table->string('particular');
            $table->date('date');
            $table->string('stock');
            $table->string('total_issue');
            $table->string('balance');
            $table->string('issue_dept');
            $table->string('qty');
            $table->string('fuel_packet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stationery_issued');
    }
};
