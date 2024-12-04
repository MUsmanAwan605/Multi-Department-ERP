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
        Schema::create('rawmaterialproducts', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->unsignedBigInteger('brand_id');
            $table->string('prod');
            $table->string('descp');
            $table->timestamps();

           $table->foreign('brand_id')->references('id')->on('rawbrand')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rawmaterialproducts');
    }
};
