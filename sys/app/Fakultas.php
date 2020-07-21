<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $fillable = ['nama', 'dekan', 'nip_dekan', ];

    public function jurusan()
    {
        return $this->hasMany(Jurusan::class, 'fakultas_id');
    }
}
