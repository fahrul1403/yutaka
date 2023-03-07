<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->id();
            $table->string('Delivery Date');
            $table->string('Item Number');
            $table->string('Item Name');
            $table->string('Supplier ID');
            $table->string('Qty');
            $table->string('Satuan');
            $table->string('IRD/COA/MILLSHEET');
            $table->string('Jenis Inspeksi');
            $table->string('VISUAL HASIL CEK');
            $table->string('DIMENSI');
            $table->string('Hasil Trial Line');
            $table->string('KASUS REJECT');
            $table->string('INSPECTOR INCOMING');
            $table->string('Jr Analyst');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
};