<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = "students";

    // protected $namespace = 'App\Http\Controllers';

    protected $fillable = [
        'id', 'Nama_Mahasiswa', 'NIM', 'Kelas', 'Angkatan', 'created_at', 'update_at'
    ];
}
