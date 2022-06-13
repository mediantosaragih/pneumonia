<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengunjung_id')->nullable();
            $table->unsignedBigInteger('kepribadian_id');
            $table->dateTime('history_date');
            $table->foreign('pengunjung_id')->references('id')->on('pengunjungs')->onDelete('cascade');
            $table->foreign('kepribadian_id')->references('id')->on('kepribadians')->onDelete('cascade');
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
        Schema::dropIfExists('histories');
    }
}
