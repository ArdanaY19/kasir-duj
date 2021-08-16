<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransMitrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trans_mitras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mitra_id')->references('id')->on('mitras');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('stok_id')->references('id')->on('stoks');
            $table->string('id_pembelian');
            $table->date('tanggal');
            $table->integer('banyak');
            $table->integer('total');
            $table->string('keterangan');
            $table->integer('nominal');
            $table->string('status');
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
        Schema::dropIfExists('trans_mitras');
    }
}
