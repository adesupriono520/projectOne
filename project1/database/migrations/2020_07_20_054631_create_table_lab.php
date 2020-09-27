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
            $table->integer('mahasiswas_id')->unsigned()->primary('mahasiswas_id');
            $table->string('kodeAccess')->unique();
            $table->timestamps();

                    $table->foreign('mahasiswas_id')
                          ->references('id')->on('mahasiswas')
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
    {        Schema::drop('Labs');
    }
}
