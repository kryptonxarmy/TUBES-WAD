<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('Kaprodi.dashboard', compact('users'));
    }

    public function create()
    {
        return view('Kaprodi.inputfile');
    }

    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('Kaprodi.dashboard')->with('success', 'Student deleted successfully');
    }

    // StudentController.php

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('Kaprodi.updatestudent', compact('student'));
    }
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('Kaprodi.dashboard')->with('success', 'Student updated successfully');
    
    }


    public function store(Request $request)
    {
        $data = $request->all();
        User::create([
            'userID' => $data['userID'],
            'password' => $data['password'],
            'role' => $data['role'],
        ]);

        return redirect(route('Kaprodi.dashboard'));
    }
}
