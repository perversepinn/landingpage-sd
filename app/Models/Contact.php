<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'alamat',
        'telepon',
        'email',
        'jam_operasional'
    ];
}