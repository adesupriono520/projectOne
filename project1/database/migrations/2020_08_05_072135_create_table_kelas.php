<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->integer('mahasiswas_id')->unsigned()->primary('mahasiswas_id');
            $table->string('nama_kelas');
            $table->timestamps();
            $table->foreign('mahasiswas_id')
                  ->references('id')->on('mahasiswas')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswas', function(Blueprint $table){
            $table->dropForeign('mahasiswas_id_kelas_foreign');
        });
        Schema::drop('kelas');
    }
}
