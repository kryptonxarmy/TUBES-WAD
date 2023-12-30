<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use Illuminate\Http\Request;

class JurnalController extends Controller
{
    public function index(){
        $jurnals = Jurnal::all();
        return view('Mahasiswa.dashboardjurnal', compact('jurnals'));
    }

    public function create()
    {
        return view('Mahasiswa.inputjurnal');
    }

    public function delete($id){
        $jurnal = Jurnal::findOrFail($id);
        $jurnal->delete();

        return redirect()->route('jurnal.dashboard')->with('success', 'jurnal deleted successfully');
    }

    // StudentController.php

    public function edit($id)
    {
        $jurnal = Jurnal::findOrFail($id);
        return view('Mahasiswa.updatejurnal', compact('jurnal'));
    }

    public function update(Request $request, $id)
    {
            $jurnal = Jurnal::findOrFail($id);
            $jurnal->update($request->all());

        return redirect()->route('jurnal.dashboard')->with('success', 'jurnal updated successfully');
    }


    public function store(Request $request)
    {
        $data = $request->all();
        Jurnal::create([
            'judul_jurnal' => $data['judul_jurnal'],
            'tgl_publish' => $data['tgl_publish'],
            'publisher' => $data['publisher'],
            'indeks_pub' => $data['indeks_pub'],
        ]);

        return redirect(route('jurnal.dashboard'));
    }
}
