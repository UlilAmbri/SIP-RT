<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function create()
    {
        return view('layanan.create', []);
    }

    public function store(Request $request)
    {
        // $data = $request->except(['_token']);
        // Lapor::insert($data);

        // return redirect('/lapor')->with('success', 'Data telah disimpan.');
        // return back()->with('insertError', 'Data gagal disimpan!');
    }
}
