<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('jenis_id');
            $table->foreignId('category_id');
            $table->string('judul');
            $table->string('isi')->nullable();
            $table->string('pengarang');
            $table->string('penerbit');
            $table->char('tahun_terbit');
            $table->string('image')->nullable();
            $table->char('isbn', 25);
            $table->char('jumlah_buku');
            $table->integer('jumlah_baca')->nullable();
            $table->string('lokasi');
            $table->date('tanggal_input');
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
        Schema::dropIfExists('books');
    }
}
