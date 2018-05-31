<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $fillable = ['ruangan', 'kegiatan'];
    protected $timestamps = true;
}
