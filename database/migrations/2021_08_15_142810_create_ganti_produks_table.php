<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGantiProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ganti_produks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stok_id')->references('id')->on('stoks');
            $table->foreignId('tamu_id')->references('id')->on('tamus');
            $table->date('tanggal');
            $table->string('mutasi');
            $table->string('upload_ganti');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('ganti_produks');
    }
}
