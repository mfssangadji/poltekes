<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('jenis_pegawai_id')->unsigned();
            $table->foreign('jenis_pegawai_id')->references('id')->on('jenis_pegawai')->onDelete('cascade'); 
            $table->bigInteger('unit_id')->unsigned();
            $table->foreign('unit_id')->references('id')->on('unit')->onDelete('cascade');
            $table->string('nip'); 
            $table->string('nama'); 
            $table->tinyInteger('jabatan'); 
            $table->tinyInteger('pendidikan'); 
            $table->tinyInteger('golongan'); 
            $table->tinyInteger('agama'); 
            $table->tinyInteger('jenis_kelamin'); 
            $table->string('no_sertifikat_dosen'); 
            $table->string('no_str'); 
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
        Schema::dropIfExists('pegawai');
    }
}
