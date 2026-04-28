<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = [
        'judul',
        'badge',
        'isi',
        'warna',
        'tanggal'
    ];
}