<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabTamusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_tamus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trans_tamu_id')->references('id')->on('trans_tamus');
            $table->string('id_pembelian');
            $table->date('tanggal');
            $table->string('keterangan');
            $table->integer('nominal');
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
        Schema::dropIfExists('tab_tamus');
    }
}
