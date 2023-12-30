<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('Admin.dashboard', compact('users'));
    }

    public function create()
    {
        return view('Admin.inputuser');
    }

    public function delete($id){
        $users = User::findOrFail($id);
        $users->delete();

        return redirect()->route('Admin.dashboard')->with('success', 'Student deleted successfully');
    }

    // StudentController.php

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('Admin.updateuser', compact('user'));
    }
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('Admin.dashboard')->with('success', 'Student updated successfully');
    }


    public function store(Request $request)
    {
        $data = $request->all();
        // Hash password before saving to the database
        $data['password'] = Hash::make($data['password']);
        User::create([
            'userID' => $data['userID'],
            'password' => $data['password'],
            'role' => $data['role'],
        ]);

        return redirect(route('Admin.dashboard'));
    }
}
