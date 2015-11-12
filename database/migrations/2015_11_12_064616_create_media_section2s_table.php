<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaSection2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_section2s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul', 128);
            $table->text('teks');
            $table->integer('rownum');
            $table->string('pengirim', 128);
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('media_section2s');
    }
}
