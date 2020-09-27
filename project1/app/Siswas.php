<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswas extends Model
{
    protected $table='mahasiswas';

    protected $fillable = ['nim','nama','shift','alamat','tgl_lahir','jenis_kelamin','email','phone','jurusan'];
    protected $dates = ['tgl_lahir'];
    public function labs(){
        return $this->hasOne('App\Labs' , 'mahasiswas_id');
    }
    public function kelas(){
        return $this->belongsTo('App\kelas', 'mahasiswas_id');
    }
}
