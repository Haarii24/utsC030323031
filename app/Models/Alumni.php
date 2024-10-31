<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'tahun_lulus',
        'jurusan',
        'pekerjaan',
        'alamat',
    ];
    
}
