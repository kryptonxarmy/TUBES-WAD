<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eprt extends Model
{
    use HasFactory;

    protected $table = "eprts";

    protected $fillable = [
        'id', 'No_Sertifikat', 'Nilai', 'Tanggal_Berakhir', 'create_at', 'update_at'
    ];
}
