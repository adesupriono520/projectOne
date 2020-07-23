<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Labs extends Model
{
    protected $table = 'Labs';
    protected $primaryKey = 'id_mahasiswa';
    protected $fillable = [
        'id_mahasiswa',
        'kodeAccess',
    ];
    public function mahasiswas(){
        return $this->belongsTo('App\Siswas', 'id_mahasiswa');
    }
}
