<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatriarchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patriarches', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomor_kk')->unique();
            $table->date('tanggal_lahir');
            $table->string('no_hp');
            $table->string('status');
            $table->string('tempat_lahir');
            $table->string('agama');
            $table->string('pendidikan')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('nik')->unique();
            $table->string('rt');
            $table->string('rw')->default('02');
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
        Schema::dropIfExists('patriarches');
    }
}
