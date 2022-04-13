<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengobatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengobatans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('gejala_id');
            $table->string('nama_pengobatan');
            $table->text('deskripsi');
            $table->foreign('gejala_id')->references('id')->on('gejalas')->onDelete('cascade');
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
        Schema::dropIfExists('pengobatans');
    }
}
