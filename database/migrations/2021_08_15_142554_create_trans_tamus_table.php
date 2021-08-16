<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransTamusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trans_tamus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stok_id')->references('id')->on('stoks');
            $table->foreignId('tamu_id')->references('id')->on('tamus');
            $table->integer('id_transaksi')->nullable();
            $table->integer('jumlah');
            $table->integer('total');
            $table->string('keterangan');
            $table->string('status');
            $table->string('pembayaran');
            $table->date('tanggal');
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
        Schema::dropIfExists('trans_tamus');
    }
}
