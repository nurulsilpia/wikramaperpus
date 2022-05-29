<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSirkulasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sirkulasis', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('siswa_id');
            $table->unsignedBigInteger('book_id');
            $table->foreign('siswa_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->char('kode_item');
            $table->char('kode_pinjam');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->string('keterangan');
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
        Schema::dropIfExists('sirkulasis');
    }
}
