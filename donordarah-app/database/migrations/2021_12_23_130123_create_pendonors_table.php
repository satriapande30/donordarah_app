<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendonors', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('email');
            $table->integer('hp');
            $table->string('nama');
            $table->string('tgl_lahir');
            $table->string('jk');
            $table->string('alamat');
            $table->string('goldarah');
            $table->string('rhesus');
            $table->string('ket');
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
        Schema::dropIfExists('pendonors');
    }
}