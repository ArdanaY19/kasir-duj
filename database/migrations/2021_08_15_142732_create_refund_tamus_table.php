<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefundTamusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refund_tamus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stok_id')->references('id')->on('stoks');
            $table->foreignId('tamu_id')->references('id')->on('tamus');
            $table->string('id_pembelian')->nullable();
            $table->date('tanggal');
            $table->string('alasan');
            $table->string('keterangan');
            $table->integer('total');
            $table->string('upload_bukti');
            $table->string('status_verif')->nullable();
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
        Schema::dropIfExists('refund_tamus');
    }
}
