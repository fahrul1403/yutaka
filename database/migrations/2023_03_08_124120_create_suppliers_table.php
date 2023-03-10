<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('delivery_date')->nullable();
            $table->string('item_number')->nullable();
            $table->string('item_name')->nullable();
            $table->string('quantity')->nullable();
            $table->string('Satuan')->nullable();
            $table->string('millsheet')->nullable();
            $table->string('jenis_inspeksi')->nullable();
            $table->string('visual_hasil_check')->nullable();
            $table->string('dimensi')->nullable();
            $table->string('hasil_trial_line')->nullable();
            $table->string('kasus_reject')->nullable();
            $table->string('inspector_incoming')->nullable();
            $table->string('jr_analisis')->nullable();
            $table->string('show_status')->nullable();
            $table->timestamps();
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
