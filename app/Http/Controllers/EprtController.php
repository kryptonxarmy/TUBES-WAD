<?php

namespace App\Http\Controllers;

use App\Models\Eprt;
use Illuminate\Http\Request;

class EprtController extends Controller
{
    public function index(){
        $eprts = Eprt::all();
        // dd($eprt);
        return view('Mahasiswa.dashboardeprt', compact('eprts'));
    }

    public function create()
    {
        return view('Mahasiswa.inputeprt');
    }

    public function delete($id){
        $eprt = Eprt::findOrFail($id);
        $eprt->delete();

        return redirect()->route('eprt.dashboard')->with('success', 'eprt deleted successfully');
    }

    // StudentController.php

    public function edit($id)
{
    $eprt = Eprt::findOrFail($id);
    return view('Mahasiswa.updateeprt', compact('eprt'));
}
//     public function edit($id)
// {
//     $admin = Admin::findOrFail($id);
//     return view('Admin.index', compact('admin'));
// }

public function update(Request $request, $id)
{
        $eprt = Eprt::findOrFail($id);
        $eprt->update($request->all());

    return redirect()->route('eprt.dashboard')->with('success', 'eprt updated successfully');
}


    public function store(Request $request)
    {
        $data = $request->all();
        Eprt::create([
            'No_Sertifikat' => $data['No_Sertifikat'],
            'Nilai' => $data['Nilai'],
            'Tanggal_Berakhir' => $data['Tanggal_Berakhir'],
        ]);

        return redirect(route('eprt.dashboard'));
    }
}
