<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('Kaprodi.dashboard', compact('students'));
    }

    public function create()
    {
        return view('Kaprodi.inputfile');
    }

    public function delete($id){
    $student = Student::findOrFail($id);
    $student->delete();

    return redirect()->route('Kaprodi.dashboard')->with('success', 'Student deleted successfully');
    }

    // StudentController.php

    public function edit($id)
{
    $student = Student::findOrFail($id);
    return view('Kaprodi.updatestudent', compact('student'));
}

public function updateStudent(Request $request, $id)
{
    // $data = Student::find($id);
    // $data->update($request->all());

    // $request->validate([
    //     'Nama_Mahasiswa' => 'required',
    //     'NIM' => 'required',
    //     'Kelas' => 'required',
    //     'Angkatan' => 'required',
    // ]);

    // dd('Validation passed');

    $student = Student::findOrFail($id);
    $student->update($request->all());

    // return redirect()->route('Kaprodi.inputfile')->with('success', 'Student updated successfully');
    dd($student)->$request->toArray();
    return redirect()->route('Kaprodi.dashboard')->with('success',"Data telah disimpan");
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

        return redirect(route('Kaprodi.dashboard'));
    }
}
