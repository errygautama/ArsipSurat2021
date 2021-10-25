<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArsipSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arsip_surats', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat');
            $table->enum('kategori', ['Undangan', 'Pengumuman', 'Nota Dinas', 'Pemberitahuan']);
            $table->string('judul');
            $table->string('file_surat');
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
        Schema::dropIfExists('arsip_surats');
    }
}
