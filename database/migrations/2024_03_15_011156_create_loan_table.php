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
        Schema::create('loan', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->integer('sno')->unique();
            $table->string('name');
            $table->string('department');
            $table->string('loan_amount','500');
            // $table->unsigned()->integer('loan_amount')->length(10); // Example length of 10
            $table->integer('January')->nullable()->default(0);
            $table->integer('February')->nullable()->default(0);
            $table->integer('March')->nullable()->default(0);
            $table->integer('April')->nullable()->default(0);
            $table->integer('May')->nullable()->default(0);
            $table->integer('June')->nullable()->default(0);
            $table->integer('July')->nullable()->default(0);
            $table->integer('August')->nullable()->default(0);
            $table->integer('September')->nullable()->default(0);
            $table->integer('October')->nullable()->default(0);
            $table->integer('November')->nullable()->default(0);
            $table->integer('December')->nullable()->default(0);
            $table->integer('remaining_balance');
            $table->timestamps();

        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan');
    }
};
