<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Labs extends Model
{
    protected $table = 'Labs';
    protected $primaryKey = 'mahasiswas_id';
    protected $fillable = [
        'mahasiswas_id',
        'kodeAccess',
    ];
    public function mahasiswas(){
        return $this->belongsTo('App\Siswas', 'mahasiswas_id');
    }
}
