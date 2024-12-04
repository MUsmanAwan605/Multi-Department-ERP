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
        Schema::create('subsupplier', function (Blueprint $table) {
            $table->id();
            $table->string('spname');
            $table->string('contact');
            $table->string('email');
            $table->string('address');
            $table->string('cname');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subsupplier');
    }
};
