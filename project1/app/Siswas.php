<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswas extends Model
{
    protected $table='mahasiswas';

    protected $fillable = ['nim','nama','kelas','shift','alamat','tgl_lahir','jenis_kelamin','email','phone','jurusan'];
    protected $dates = ['tgl_lahir'];
    public function labs(){
        return $this->hasOne('App\Labs' , 'id_mahasiswa');
    }
}
