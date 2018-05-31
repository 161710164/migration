<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $fillable = ['nisn', 'nama', 'tahun_kelulusan', 'tempat_lahir', 'tanggal_lahir'];
    protected $timestamps = true;
}
