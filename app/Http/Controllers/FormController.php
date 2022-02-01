<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class FormController extends Controller
{
    public function create()
    {
        return view('form.create', []);
    }

    public function store(Request $request)
    {
        // $data = $request->except(['_token']);
        // Layanan::insert($data);
        $name = "Ulil Ambri";
        $layanan = "Surat Keterangan Mati";
        $data=array('name'=>$name,"layanan"=>$layanan);
        Layanan::insert($data);

        return redirect('/form')->with('success', 'Data telah disimpan.');
        return back()->with('insertError', 'Data gagal disimpan!');
    }
}
