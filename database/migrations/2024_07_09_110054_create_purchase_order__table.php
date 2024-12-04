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
        Schema::create('purchase_order', function (Blueprint $table) {
            $table->id();
            $table->string('po');
            $table->string('date');
            $table->string('postatus');
            $table->string('Requisition');
            $table->string('Requisition_Date');
            $table->string('Requisition_Dept');
            $table->string('V_No');
            $table->string('Company_Name');
            $table->string('Addres');
            $table->string('Telephone');
            $table->string('Email');
            $table->string('NTN');
            $table->string('Contact_Person');
            $table->string('Contact_Person_No');

            $table->string('c_name');
            $table->string('Address');
            $table->string('strn');
            $table->string('NTNn');
            $table->string('m_Code');
            $table->string('IncludingGST');
            $table->string('DeliveryDate');

            $table->string('QTY');
            $table->string('UoM');
            $table->string('Unit_Price');
            $table->string('Excluding_GST');
            $table->string('GST');
            $table->string('M_Descp');

            $table->string('status')->default('process');
            // $table->string('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_order_');
    }
};
