<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table= 'kelas';
    protected $primary = 'mahasiswas_id';
    protected $fillable = ['mahasiswas_id','nama_kelas'];

    public function mahasiswas(){
        return $this->hasMany('App\Siswas','mahasiswas_id');
    }
}
