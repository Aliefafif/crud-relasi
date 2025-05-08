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
        Schema::create('komiks', function (Blueprint $table) {
            $table->increments('id');
           $table->string('nama_komik');
           $table->string('genre_komik');
           $table->string('harga');
           $table->integer('stok');
           $table->string('penerbit');
           $table->date('tanggal_terbit');
           $table->string('foto');
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
        Schema::dropIfExists('komik');
    }
};
