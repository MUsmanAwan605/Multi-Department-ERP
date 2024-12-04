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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('field_1');
            $table->string('field_2');
            $table->string('field_3');
            $table->string('field_4');
            $table->string('field_5');
            $table->string('field_6');
            $table->string('field_7');
            $table->string('field_8');
            $table->string('field_9');
            $table->string('field_10');
            $table->string('field_11');
            $table->string('field_12');
            $table->string('extra_field_13');
            $table->string('extra_field_14');
            $table->string('extra_field_15');
            $table->string('extra_field_16');
            $table->string('extra_field_17');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
