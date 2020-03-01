<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nama');
            $table->char('jk');
            $table->String('tmp_lahir');
            $table->timestamp('tgl_lahir');
            $table->String('email');
            $table->String('no_hp');
            $table->text('alamat');
            $table->String('foto');
            $table->String('angkatan');
            $table->String('status_kerja');
            $table->String('tmp_kerja');
            $table->integer('beastudi_id');
            $table->integer('prodi_id');
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
        Schema::dropIfExists('alumnis');
    }
}
