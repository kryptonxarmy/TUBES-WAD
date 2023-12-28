<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = "students";

    protected $fillable = [
        'id', 'Nama', 'NIM', 'Kelas', 'Angkatan', 'created_at', 'update_at'
    ];
}
