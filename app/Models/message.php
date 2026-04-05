<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'pesans';
    
    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'subjek',
        'pesan'
    ];
}
