<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $fillable = ['ekskul', 'ruang_belajar', ' ruang_ibadah'];
    protected $timestamps = 'true';

    public function Galeri () {
        return $this->belongsTo('App\Galeri', 'galeri_id')
    }
}