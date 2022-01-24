<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Wakaf extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('wakaf', function (Blueprint $table) {
            $table->bigIncrements('id_wakaf')->length(5);
            $table->string('nama', 255);
            $table->string('email', 50);
            $table->string('id_user', 500);
            $table->string('nama_barang', 255);
            $table->text('deskripsi_barang');
            $table->date('tanggal_pemberian');
            $table->string('nomer_dihubungi', 255);
            $table->string('bukti', 255);
            $table->string('status', 255);
            $table->date('updated_at');
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('wakaf');
    }
}
