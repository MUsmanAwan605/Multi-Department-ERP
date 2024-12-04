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
        Schema::create('xr', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('day');
            $table->string('month');
            $table->string('year');
            $table->integer('lot_no');
            $table->string('lot_size');
            $table->float('X1')->nullable();
            $table->float('X2')->nullable();
            $table->float('X3')->nullable();
            $table->float('X4')->nullable();
            $table->float('X5')->nullable();
            $table->integer('no_of_smpl');
            $table->float('total');
            $table->float('mean');
            $table->float('range');
            $table->string('confirmation');
            $table->text('notes');
            $table->string('sup_prcs_zone');
            $table->integer('part_no');
            $table->string('part_name');
            $table->string('su_chrctr');
            $table->float('stndrd');
            $table->float('smpl_frqncy');
            $table->string('msrng_eqp');
            $table->float('cl');
            $table->float('r_bar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('xr');
    }
};
