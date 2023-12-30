<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        // dd($students);
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

public function update(Request $request, $id)
{
        $student = Student::findOrFail($id);
        $student->update($request->all());

    return redirect()->route('Kaprodi.dashboard')->with('success', 'Student updated successfully');
}


    public function data(Request $request)
    {
        $data = $request->all();
        Student::create([
            'Nama_Mahasiswa' => $data['Nama_Mahasiswa'],
            'NIM' => $data['NIM'],
            'Kelas' => $data['Kelas'],
            'Angkatan' => $data['Angkatan']
        ]);

        return redirect(route('Kaprodi.dashboard'));
    }
}
