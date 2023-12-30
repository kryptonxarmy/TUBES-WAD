<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    use HasFactory;

    protected $table = 'jurnals';

    protected $fillable = [
        'id', 'judul_jurnal', 'tgl_publish', 'publisher', 'indeks_pub', 'created_at', 'update_at'
    ];
}
