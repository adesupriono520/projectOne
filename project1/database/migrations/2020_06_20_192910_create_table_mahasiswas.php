<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMahasiswas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->increments('id_mahasiswa');
            $table->string('nim',25)->unique();
            $table->string('nama',50);
            $table->string('kelas',15);
            $table->string('shift',2);
            $table->text('alamat');
            $table->date('tgl_lahir');
            $table->string('jenis_kelamin',10);
            $table->string('email',50);
            $table->string('phone',15);
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
        Schema::dropIfExists('mahasiswas');
    }
}
