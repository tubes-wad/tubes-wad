<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Crowdfunding extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('crowdfunding', function (Blueprint $table) {
            $table->bigIncrements('id_crowdfunding')->length(5);
            $table->string('nama', 255);
            $table->text('deskripsi');
            $table->date('deadline');
            $table->string('tujuan', 255);
            $table->string('kategori', 255);
            $table->string('gambar', 150);
            $table->string('jumlah_uang', 255);
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
        Schema::drop('crowdfunding');
    }
}
