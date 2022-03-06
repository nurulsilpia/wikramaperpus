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
            $table->char('kode_item');
            $table->string('judul');
            $table->string('keterangan');
            $table->char('kode_pinjam');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
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
