<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Labs', function (Blueprint $table) {
            $table->integer('id_mahasiswa')->unsigned()->primary('id_mahasiswa');
            $table->string('kodeAccess')->unique();
            $table->timestamps();

                    $table->foreign('id_mahasiswa')
                          ->references('id')->on('mahasiswa')
                          ->onDelete('cascade')
                          ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Labs');
    }
}
