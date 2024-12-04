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
        Schema::create('financesaleinvoice', function (Blueprint $table) {
            $table->id();
            $table->string('sale_invoice');
            $table->string('date');
            $table->string('descp');
            $table->string('qty');
            $table->string('price');
            $table->string('gst');
            $table->string('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financesaleinvoice');
    }
};
