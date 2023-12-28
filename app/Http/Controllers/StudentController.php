<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $Kaprodi = Student::all(); 
        return view('Kaprodi.Dashboard', compact('Kaprodi')); 
    }

    public function create()
    {
        return view('Kaprodi.inputfile'); 
    }

    
    public function data(Request $request)
    {
        $data = $request->all();
        Student::create([
            'Nama_Mahasiswa' => $data['nama_mahasiswa'],
            'NIM' => $data['nim'],
            'Kelas' => $data['kelas'],
            'Angkatan' => $data['angkatan']
        ]);

        return redirect(route('kaprodi.dashboard'));
    }
}
