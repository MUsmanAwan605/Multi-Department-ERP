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
        Schema::create('gr_CD70_CD125', function (Blueprint $table) {
            $table->id();
            $table->integer('Sr#');
            $table->string('opr_name');
            for($i = 0;$i <= 31; $i++){
                $table->enum("$i",['-','Rejected'])->nullable();
            }
            $table->integer('total')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gr_CD70_CD125');
    }
};
