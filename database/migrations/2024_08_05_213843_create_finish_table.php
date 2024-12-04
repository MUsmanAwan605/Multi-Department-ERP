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
        Schema::create('finish', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Ensure title is unique
            $table->integer('qty')->default(0); // The quantity being added
            $table->integer('total_qty')->default(0); // Total quantity column
            $table->date('date')->nullable();
            $table->text('descp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finish');
    }
};
