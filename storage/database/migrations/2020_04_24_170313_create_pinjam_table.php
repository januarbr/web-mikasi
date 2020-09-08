<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjam', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('buku_id')->unsigned();
            $table->integer('anggota_id')->unsigned();
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
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
        Schema::dropIfExists('pinjam');
    }
}
