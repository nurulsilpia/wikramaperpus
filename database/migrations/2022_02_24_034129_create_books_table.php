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
            $table->string('isi');
            $table->string('pengarang')->nullable();
            $table->string('penerbit')->nullable();
            $table->char('tahun_terbit')->nullable();
            $table->string('image')->nullable();
            $table->char('isbn', 25)->nullable();
            $table->char('jumlah_buku');
            $table->integer('jumlah_baca');
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
