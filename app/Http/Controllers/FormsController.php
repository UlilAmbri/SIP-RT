<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
class FormsController extends Controller
{
    function show()
    {
        $data = Layanan::all();
        return view('layanan', ['lapors'=>$data]);
    }

    public function index()
    {
        return view('forms.index', []);
    }

    public function store(Request $request)
    {
        $name = "Aulia Cenyo";
        $layanan = "Surat Keterangan";
        $data=array('name'=>$name,"layanan"=>$layanan);
        Layanan::insert($data);

        return redirect('/form')->with('success', 'Data telah disimpan.');
        return back()->with('insertError', 'Data gagal disimpan!');
    }
}
