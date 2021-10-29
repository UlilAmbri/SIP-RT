<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporController extends Controller
{
    public function create()
    {
        return view('lapor.create', []);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'ktp' => 'image|nullable|max:1999',
            'kk' => 'image|nullable|max:1999',
            'buku_nikah' => 'image|nullable|max:1999'
        ]);

        $lapor = new Lapor;
        $lapor->name = $request->input('name');
        $lapor->alamat = $request->input('alamat');
        $lapor->no_hp = $request->input('no_hp');
        $lapor->ktp = $request->input('ktp');
        $lapor->kk = $request->input('kk');
        $lapor->buku_nikah = $request->input('buku_nikah');
        $lapor->save();

        return redirect('/dashboard')->with('success', 'Data telah disimpan.');
    }
}
